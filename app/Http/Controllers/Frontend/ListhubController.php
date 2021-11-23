<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use carbon\Carbon;
use App\Models\SystemConfig;
use AppHelper;

class ListhubController extends Controller
{
    public $client;

    public function __construct()
    {

        if(AppHelper::SystemConfig('listhub_token')){

            $dt1 = Carbon::now()->timestamp;
            $dt2 = AppHelper::SystemConfig('listhub_token_exp') ?? 0;
            if($dt1 > $dt2){

                self::getListHubAccessToken();
            }
            
        }else{

            self::getListHubAccessToken();
        }

    }

    public function DecodeJWTToKen($token){

        $tokenParts = explode(".", $token);  
        $tokenHeader = base64_decode($tokenParts[0]);
        $tokenPayload = base64_decode($tokenParts[1]);
        $jwtHeader = json_decode($tokenHeader);
        $jwtPayload = json_decode($tokenPayload);

        return $jwtPayload;
    }

    public function getListHubAccessToken(){
        $client = new Client();
        $response = $client->post('https://api.listhub.com/oauth2/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => env('LISTHUB_CLIENT_ID', '---'), 
                'client_secret' => env('LISTHUB_CLIENT_SECRET', '---')
            ]
        ]);

        $tokenDetails = json_decode((string) $response->getBody(), true);

        $tokenUser = self::DecodeJWTToKen($tokenDetails['access_token']);

        SystemConfig::updateOrCreate(
            ['config_key' => 'listhub_token'], 
            [
                'config_value' => 'Bearer '.$tokenDetails['access_token']
            ]
        );

        SystemConfig::updateOrCreate(
            ['config_key' => 'listhub_token_exp'], 
            ['config_value' => $tokenUser->exp]
        );
    }

    public function getListHubProperties(Request $request){

        $filter = "Country eq 'Canada'";

        if($request->has('address') && $request->address != null){

            $filter .= "UnparsedAddress eq '$request->address' or StateOrProvince eq '$request->address' or PostalCode eq '$request->address'";
        }

        if($request->has('city') && $request->city != null){

            $filter .= " and PostalCity eq '$request->address'";
        }

        $query = [
            '$select' => 'ListingKey,Latitude,Longitude,ListAgentFullName,ListAgentEmail,LivingArea,Media,BathroomsFull,BedroomsTotal,ListPrice,PostalCity,StateOrProvince,UnparsedAddress,Country,PropertyType,PropertySubType',
            '$top' => 50
        ];

        if($filter != ''){

            $query['$filter'] =  $filter;
        }

        $client = new Client();
        $response = $client->get('https://api.listhub.com/odata/Property', [
            'headers' => [
                'Authorization' => AppHelper::SystemConfig('listhub_token'),        
                'Accept'        => 'application/json',
            ],
            'query' => $query
        ]);

        $properties = json_decode((string) $response->getBody(), true);

        return $properties['value'];

    } 

    public function getproperty($id){

        $client = new Client();
        $response = $client->get("https://api.listhub.com/odata/Property('$id')", [
            'headers' => [
                'Authorization' => AppHelper::SystemConfig('listhub_token'),        
                'Accept'        => 'application/json',
            ],
            'query' => [
                '$select' => 'ListingKey,Latitude,Longitude,ListAgentFullName,ListAgentOfficePhone,LivingArea,ListAgentEmail,LotSizeAcres,Media,BathroomsFull,BedroomsTotal,ListPrice,PostalCity,StateOrProvince,UnparsedAddress,Country,PostalCode,PropertyType,PropertySubType',
                '$top' => 5
            ]
        ]);

        $property = json_decode((string) $response->getBody(), true);

        return view('Frontend.pages.listhubPropertyDetail',compact('property'));

    }
}
