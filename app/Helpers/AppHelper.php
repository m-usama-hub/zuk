<?php

namespace App\Helpers;

use Auth;
use Config;
use DB;
use Storage;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use App\Models\SystemConfig;
use Str;
use Route;
use App\Models\UserBusinessDetail;
use App\Models\BusinessCategory;
use App\Models\BusinessItemPackage;
use App\Models\UserDetail;
use App\Models\Page;
use App\Models\CmsData;
use App\Models\PersonalMessage;
use Illuminate\Support\Facades\Http;

class AppHelper
{

    public static function SaveFileAndGetPath($Attachment, $AttachmentPath){
        $ErrorMsg = "";
        try
        {
            // return $Attachment->getClientOriginalExtension();
            if ($Attachment == null) {
                return null;
            }

            if ($ErrorMsg == "")
            {
                $AttachmentPath = $AttachmentPath.date("Y").'/'.date("F");
                $extension = $Attachment->getClientOriginalExtension();
                $move_file_path = public_path() . $AttachmentPath;
                $move_file_name = Str::random() . date("Ymdhisu") . '.' . $extension;
                $SavingFilePath = $AttachmentPath."/".$move_file_name;
                $FileMoved = $Attachment->move($move_file_path, $move_file_name);
            }
        }
        catch (\Throwable $e)
        {
            $ErrorMsg = "Error Occured while uploading file. Exception Msg: " . $e->getMessage();
            return array("reply"=> 0 ,"status"=> false ,"msg" => $ErrorMsg);
        }
        if ($ErrorMsg == "")
        {
            return array("reply"=> 1 ,"status"=> true ,"msg" => "File Uploaded Successfully.", "path" => $SavingFilePath);
        }
        else
        {
            return array("reply"=> 0 ,"status"=> false ,"msg" => $ErrorMsg);
        }

    }

    public static function getIpData(){

        if(\Request::ip() == '127.0.0.1'){

            return  Location::get();
         }
         else{

             return Location::get(\Request::ip());
         }

    }

    public static function SendSms($from_number){
        $basic  = new \Vonage\Client\Credentials\Basic("e4797606", "wLsZEhQvQn24M5dZ");
        $client = new \Vonage\Client(new \Vonage\Client\Credentials\Container($basic));


        $request = new \Vonage\Verify\Request($from_number, "Homzs",6);
        $response = $client->verify()->start($request);


        if ($response)
        {
            return $response->getRequestId();
        }
    }

    public static function VerifySms($request_id, $code){

        $basic  = new \Nexmo\Client\Credentials\Basic("e4797606", "wLsZEhQvQn24M5dZ");
        $client = new \Nexmo\Client($basic);

        $result = $client->verify()->check($request_id, $code);

        return $result->status == 0 ? true : false;

    }

    public static function SystemConfig($key){
        $config =  SystemConfig::where('config_key',$key)->first();
        if($config != null){

            return $config->config_value;
        }

        return null;
    }

    public static function getDataBasesOnPage(){

        $data = [];
        $pageCms = [];
        $currentRouteName = Route::currentRouteName();

        if($currentRouteName == 'indexProfessional'){

            $data['ModalId'] = "#mydetails";

        }else if($currentRouteName == 'indexProperty'){

            $data['ModalId'] = "#buisness_property";

        }else if($currentRouteName == 'indexItem'){

            $data['ModalId'] = "#itemtosell";

        }else if($currentRouteName == 'indexHousemate'){

            $data['ModalId'] = "#posthousemate";

        }else if($currentRouteName == 'indexMessage'){

            $data['ModalId'] = "#postmessage";

        }else{

            $data['ModalId'] = "";
        }

        if($data['ModalId'] != ""){

            $page = Page::where('routeName',$currentRouteName)->with('Data')->first();
            $pageCms = $page->Data->pluck('value','key')->toArray();
    
        }

        $data['heading'] = $pageCms['Page Heading'] ?? self::SystemConfig('header_heading_1');
        $data['LinkHtmlText'] = $pageCms['Page Modal'] ?? '';


        if(Auth::user()){
            if(!Auth::user()->UserHasBusinessProfile()){
                unset($data['LinkHtmlText']);
                unset($data['ModalId']);
            }
        }else{
                unset($data['LinkHtmlText']);
                unset($data['ModalId']);
        }

        return $data;
    }

    public static function getMyposts(){

        if(Auth::user() && Auth::user()->UserHasBusinessProfile()){

            $allposts = UserBusinessDetail::where('user_id',Auth::user()->id)
                                ->with('BusinessProperties:id,business_id,cover_image,title,description,created_at,status')
                                ->with('BusinessItems:id,business_id,cover_image,title,description,created_at,status')
                                ->with('BusinessProjects:id,business_id,cover_image,title,description,created_at,status')
                                ->with('BusinessMessages:id,business_id,cover_image,title,message as description,created_at,status')
                                ->with('BusinessHousemates:id,business_id,cover_image,title,description,created_at,status')
                                ->get();

            $data = array();

            if(count($allposts->pluck('BusinessProperties')) > 0){

                foreach ($allposts->pluck('BusinessProperties') as $key => $property) {

                    array_push($data,$property);
                }

            }

            if(count($allposts->pluck('BusinessItems')) > 0){

                foreach ($allposts->pluck('BusinessItems') as $key => $item) {

                    array_push($data,$item);
                }

            }

            if(count($allposts->pluck('BusinessProjects')) > 0){

                foreach ($allposts->pluck('BusinessProjects') as $key => $project) {

                    array_push($data,$project);
                }

            }

            if(count($allposts->pluck('BusinessMessages')) > 0){

                foreach ($allposts->pluck('BusinessMessages') as $key => $message) {

                    array_push($data,$message);
                }

            }

            if(count($allposts->pluck('BusinessHousemates')) > 0){

                foreach ($allposts->pluck('BusinessHousemates') as $key => $housemate) {

                    array_push($data,$housemate);
                }

            }



            return collect($data)->flatten()->sortBy('created_at')->reverse();
        }

        return array();

    }

    public static function professionalCategories(){

        return BusinessCategory::where('category_of','pro')->get();

    }

    public static function getMyfavourites(){

        $data = array();

        if(Auth::user() ){

            $UserFav = UserDetail::where('user_id',Auth::user()->id)->with('UserFavorites')->first();

            if (count($UserFav->UserFavorites) > 0) {

                foreach ($UserFav->UserFavorites as $key => $fav) {

                    if($fav->model == 'BusinessDetail'){

                        $path = 'App\Models\User'.$fav->model;

                    }else{

                        $path = 'App\Models\Business'.$fav->model;
                    }


                    if($path == 'App\Models\BusinessMessage'){

                       $getData = $path::where('id',$fav->record_id)->select('id','business_id','cover_image','title','message as description','created_at','slug')->get();

                    }else if($path == 'App\Models\UserBusinessDetail'){

                       $getData = $path::where('id',$fav->record_id)->select('id','id as business_id','business_profile_pic as cover_image','business_name as title','business_details as description','business_phone as contact_no','created_at','slug')->get();
        
                    }
                    else{

                        $getData = $path::where('id',$fav->record_id)->select('id','business_id','cover_image','title','description','created_at','slug')->get();

                    }

                    array_push($data,$getData);
                }

            }

            $flatData = collect($data)->flatten();

            // dd($flatData);

            return $flatData;
        }

        return array();

    }

    public static function searchData($query, $DISTANCE_KILOMETERS){

        
        // $IpData = self::getIpData();

        // $LATITUDE =  $IpData->latitude;
        // $LONGITUDE =  $IpData->longitude;

        // $haversine = "(6371 * acos(cos(radians(" . $LATITUDE . ")) 
        // * cos(radians(`lat`)) 
        // * cos(radians(`lng`) 
        // - radians(" . $LONGITUDE . ")) 
        // + sin(radians(" . $LATITUDE . ")) 
        // * sin(radians(`lat`))))";
        
        // return $query->select()->selectRaw("{$haversine} AS distance")->whereRaw("{$haversine} < ?", [$DISTANCE_KILOMETERS]);

        return $query;

    }

    public static function GetLatLongFromAddress($address){

        // $client = new \GuzzleHttp\Client();
        // $request = $client->get('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCZf3_pkkppQ2yhnjB2Tb9NapQzZV1CVcg&address='.$address);
        // $response = $request->getBody();

        // dd($request);


        $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCZf3_pkkppQ2yhnjB2Tb9NapQzZV1CVcg&address='.$address);

        return $response->json();

    }

    public static function getCmsData($pageRoute, $key){

        $data = Page::where('routeName' , $pageRoute)->with(['Data' => function($q) use($key){
            $q->where('key', $key);
        }])->first();

        $config = $data->Data->first();

        if($config != null){

            return $config->value;
        }

        return null;
    }

    public static function getMessages(){

        $myMessages  = PersonalMessage::where('to_id', Auth::user()->id)->where('parent_message_id' ,null)->orWhere('from_id', Auth::user()->id)->where('parent_message_id' ,null)->with('MessageReplies')->with('ToUser')->orderby('created_at','DESC')->get();

        return $myMessages;

    }

    public static function MakeItemPayment($data){

        $message = "";

        if(array_key_exists('package_id', $data) && $data['package_id'] != "null" ){

            $package = BusinessItemPackage::where('id',$data['package_id'])->first();

            $walletAmount = Auth::user()->UserBusinessDetail->business_wallet_available;

            if($walletAmount < $package->amount){

                $data['package_id'] = null;
                $data['status'] = 'draft';

                $message = "Insufficient balance to make Ad Standout.";
            }
            else{

                Auth::user()->UserBusinessDetail->update([
                    'business_wallet_available' => $walletAmount - $package->amount,
                    'business_wallet_spended' => $package->amount + Auth::user()->UserBusinessDetail->business_wallet_spended
                ]);

                $message = "Payment Successful..!";

            }
        }

        return [
            'payment' => $data,
            'message' => $message
        ];

    }

}
