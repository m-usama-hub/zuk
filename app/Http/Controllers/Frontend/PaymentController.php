<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SystemConfig;
use AppHelper;
use App\Models\UserBusinessPayment;
use Auth;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use carbon\Carbon;

class PaymentController extends Controller
{
    public function __construct()
    {

        if(AppHelper::SystemConfig('Paypal_token')){

            $dt1 = Carbon::now()->timestamp;
            $dt2 = AppHelper::SystemConfig('Paypal_token_exp') ?? 0;
            if($dt1 > $dt2){

                self::getPaypalAccessToken();
            }
            
        }else{

            self::getPaypalAccessToken();
        }

    }

    public function getPaypalAccessToken(){
        $client = new Client();
        $response = $client->post('https://api-m.'.env('PAYPAL_ACCOUNT','sandbox').'.paypal.com/v1/oauth2/token', [
            'form_params' => [
                'grant_type' => 'client_credentials'
            ],
            'auth' => [env('PAYPAL_CLIENT_ID', '---'), env('PAYPAL_CLIENT_SECRET', '---')]
        ]);

        $tokenDetails = json_decode((string) $response->getBody(), true);

        SystemConfig::updateOrCreate(
            ['config_key' => 'Paypal_token'], 
            [
                'config_value' => 'Bearer '.$tokenDetails['access_token']
            ]
        );

        $ExpireInHours = $tokenDetails['expires_in'] / 3600;
        $now = date("Y-m-d H:i:s");
        $expireTimestamp = date("Y-m-d H:i:s", strtotime("+8 hours", strtotime($now)));

        SystemConfig::updateOrCreate(
            ['config_key' => 'Paypal_token_exp'], 
            ['config_value' => $expireTimestamp]
        );
    }

    public function VerifyPaymentOrder($order_id){

        $data = [];
        $data['status'] = false;
        $data['message'] = "";

        $client = new Client();
        $response = $client->get('https://api.'.env('PAYPAL_ACCOUNT','sandbox').'.paypal.com/v2/checkout/orders/'.$order_id, [
            'headers' => [
                'Authorization' => AppHelper::SystemConfig('Paypal_token'),        
                'Accept'        => 'application/json',
            ],
        ]);

        $order = json_decode($response->getBody(), true);

        if($order['status'] == "APPROVED"){

            $data['status'] = true;
            $data['response'] = $order;
            $data['message'] = 'Payment Verified';
        }
        else{

            $data['message'] = "Error Fetching Order.";
        }

        return $data;
    }

    public function paymentPost(Request $request){

        $data = [];
        $data['status'] = false;
        $data['message'] = "";

        if(Auth::user()->UserBusinessDetail){

            $Payment = self::VerifyPaymentOrder($request->order_id);

            if($Payment['status']){

                $PaymentDetail = $Payment['response'];

                $amount = $PaymentDetail['purchase_units'][0]['amount']['value'];

                UserBusinessPayment::create([
                    "user_id" =>Auth::user()->id,
                    "payed_amount" => $amount,
                    "payer_email" => $PaymentDetail['payer']['email_address'],
                    "order_id" => $PaymentDetail['id'],
                    "order_status" => $PaymentDetail['status'],
                    "order_created_at" => $PaymentDetail['create_time'],
                ]);

                $UserBusinessDetail = Auth::user()->UserBusinessDetail;

                $UserBusinessDetail->update([
                    'business_wallet_available' => $UserBusinessDetail->business_wallet_available + $amount,
                    'business_wallet_total' => $UserBusinessDetail->business_wallet_total + $amount
                ]);

                $data['status'] = true;
                $data['message'] = "Payment Successful";
            }
            else{

                $data['status'] = false;
                $data['message'] = "Error Making Payment..";

            }

        }

        return $data;
    }
}
