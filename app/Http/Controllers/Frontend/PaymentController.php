<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserBusinessPayment;
use Auth;

class PaymentController extends Controller
{
    public function paymentPost(Request $request){

        if(Auth::user()->UserBusinessDetail){

            UserBusinessPayment::create([
                "user_id" =>Auth::user()->id,
                "payed_amount" => $request->amount,
            ]);

            $UserBusinessDetail = Auth::user()->UserBusinessDetail;

            $UserBusinessDetail->update([
                'business_wallet_available' => $UserBusinessDetail->business_wallet_available + $request->amount,
                'business_wallet_total' => $UserBusinessDetail->business_wallet_total + $request->amount
            ]);

            return true;
        }

        return false;
    }
}
