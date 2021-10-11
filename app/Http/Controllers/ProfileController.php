<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\UserInterest;
use App\Models\UserDetails;
use App\Models\UserBusinessDetail;
use App\Models\UserBusinessService;
use App\Models\UserBusinessCategory;
use AppHelper;
use DB;
use Config;
use Validator;

class ProfileController extends Controller
{
    public function addUserInterest(Request $request){

        $data = [];
        $data['message'] = '';
        $newVal = $request->interest;
        $getUserInterest = Auth::user()->UserDetail->UserInterests->pluck('interest');

        if(in_array($newVal, $getUserInterest->toArray())){

             $data['message'] = 'Interest Already exsist...!';

        }else{

            UserInterest::create([
                'user_id' => Auth::user()->id,
                'interest' => $newVal
            ]);

            $data['interest'] = UserInterest::where('user_id', Auth::user()->id)->get();

        }
        return $data;

    }

    public function deleteUserInterest(Request $request){

        $data = [];
        $data['message'] = '';
        $delVal = $request->interest;

        if(UserInterest::where('interest', $delVal)->delete()){

            $data['interest'] = UserInterest::where('user_id', Auth::user()->id)->get();

        }else{

             $data['message'] = 'Cannot delete';

        }

        return $data;
    }

    public function updateProfile(Request $request){

        $ErrorMsg = "";
        DB::beginTransaction();
        try
        {
            if(Auth::user()->isUserLoggedIn()){

                $NewData = $request->all();
                unset($NewData['_token']);
                unset($NewData['_method']);
                if(Auth::user()->email == $NewData['email']){
                    unset($NewData['email']);
                }
                $UserDetailData = Auth::user()->UserDetail->toArray();
                $UpdateUserDetailData=array_diff($NewData,$UserDetailData);
                $validator = Validator::make($UpdateUserDetailData, [
                    'email' => ['string', 'email', 'max:255', 'unique:users'],
                ]);
                if ($validator->fails()) {
                    $data["status"] = false;
                    $data["message"] = "Some thing went wrong.";
                    $data["error"] = $validator->errors();
                    return redirect()->back()->with('message',$data['error']);
                }

                if($request->has('password') && $request->password != null){

                    $validator = Validator::make($request->all(), [
                        'password' => 'required', 'string', 'min:8', 'confirmed',
                        'password_confirm' => 'required|same:password',
                    ]);
                    if ($validator->fails()) {
                        $data["status"] = false;
                        $data["message"] = "Some thing went wrong.";
                        $data["error"] = $validator->errors();
                        return redirect()->back()->with('message',$data['error']);
                    }
                }

                if($request->has('profile_pic')){

                    $UploadProfilePic =  AppHelper::SaveFileAndGetPath($request->profile_pic,Config::get('constants.attachment_paths.UserProfilePic'));

                    if($UploadProfilePic['status']){

                        $UpdateUserDetailData['profile_pic'] = $UploadProfilePic['path'];

                    }
                    else{

                        $ErrorMsg = $UploadProfilePic['msg'];

                    }

                }

                if($request->has('user_profile_pic')){

                    $UploadProfilePic =  AppHelper::SaveFileAndGetPath($request->user_profile_pic,Config::get('constants.attachment_paths.UserProfilePic'));

                    if($UploadProfilePic['status']){

                        $UpdateUserDetailData['user_profile_pic'] = $UploadProfilePic['path'];

                    }
                    else{

                        $ErrorMsg = $UploadProfilePic['msg'];

                    }

                }

                if($request->has('user_profile_video')){

                    $UploadProfilePic =  AppHelper::SaveFileAndGetPath($request->user_profile_video,Config::get('constants.attachment_paths.UserProfileVideo'));

                    if($UploadProfilePic['status']){

                        $UpdateUserDetailData['user_profile_video'] = $UploadProfilePic['path'];

                    }
                    else{

                        $ErrorMsg = $UploadProfilePic['msg'];

                    }

                }

                if($ErrorMsg == ''){


                    Auth::user()->UserDetail->update($UpdateUserDetailData);

                    if (array_key_exists("firstname",$UpdateUserDetailData) || array_key_exists("lastname",$UpdateUserDetailData)){

                        Auth::user()->update([
                            'name' => $UpdateUserDetailData['firstname']." ".$UpdateUserDetailData['lastname']
                        ]);
                    }

                    if (array_key_exists("email",$NewData)){

                        User::where('id',Auth::user()->id)->update([
                            'email' => $NewData['email'],
                            'email_verified_at' => null
                        ]);
                    }

                    if($request->has('password') && $request->password != null){

                        $hashedPassword = Auth::user()->password;
                        if (Hash::check($request->current_password, $hashedPassword)) {
                            $user->update([
                                "password" => Hash::make($request->password)
                            ]);
                        }
                        else{

                            $ErrorMsg = "Current password is wrong..!";
                        }

                    }
                }

            }


            if(Auth::user()->isAdminLoggedIn() || Auth::user()->isSuperAdminLoggedIn()){

                return redirect()->route('user.index');

            }

        } catch (\Throwable $e) {
            DB::rollback();
            $ErrorMsg = $e->getMessage();
        }

        if ($ErrorMsg == "") {
            DB::commit();
            return redirect()->back()->with('message', 'Successfully Updated.');
        } else {

            return redirect()->back()->with('message', $ErrorMsg);
        }

    }

    public function UpdateBusinessData(Request $request){

        $ErrorMsg = "";
        DB::beginTransaction();
        try
        {

            if(Auth::user()->isUserLoggedIn()){

                $NewData = $request->all();
                unset($NewData['_token']);
                unset($NewData['_method']);

                $UserBusinessDetailData = Auth::user()->UserBusinessDetail == null ? array() : Auth::user()->UserBusinessDetail->toArray();
                if(Auth::user()->UserBusinessDetail){

                    unset($UserBusinessDetailData['reviews']);
                }
                $UpdateUserBusinessDetailData=array_diff($NewData,$UserBusinessDetailData);


                $validator = Validator::make($UpdateUserBusinessDetailData, [
                    'business_logo' => 'image',
                    'user_business_pic' => 'image',
                    'user_business_video' => 'mimes:mp4,mov,ogg,qt | max:20000',
                ]);
                if ($validator->fails()) {
                    $data["status"] = false;
                    $data["message"] = "Some thing went wrong.";
                    $data["error"] = $validator->errors();
                    dd($data);
                    return redirect()->back()->with('message',$data['error']);
                }

                if($request->has('business_logo')){

                    $UploadFile =  AppHelper::SaveFileAndGetPath($request->business_logo,Config::get('constants.attachment_paths.UserBusinessProfileLogo'));

                    if($UploadFile['status']){

                        $UpdateUserBusinessDetailData['business_logo'] = $UploadFile['path'];

                    }
                    else{

                        $ErrorMsg = $UploadFile['msg'];

                    }

                }

                if($request->has('user_business_pic')){

                    $UploadFile =  AppHelper::SaveFileAndGetPath($request->user_business_pic,Config::get('constants.attachment_paths.UserBusinessProfilePic'));

                    if($UploadFile['status']){

                        $UpdateUserBusinessDetailData['business_profile_pic'] = $UploadFile['path'];

                    }
                    else{

                        $ErrorMsg = $UploadFile['msg'];

                    }

                }

                if($request->has('user_business_video')){

                    $UploadFile =  AppHelper::SaveFileAndGetPath($request->user_business_video,Config::get('constants.attachment_paths.UserBusinessProfileVideo'));

                    if($UploadFile['status']){

                        $UpdateUserBusinessDetailData['business_profile_video'] = $UploadFile['path'];

                    }
                    else{

                        $ErrorMsg = $UploadFile['msg'];

                    }

                }
                if($ErrorMsg == ''){

                    if(Auth::user()->UserBusinessDetail){

                        Auth::user()->UserBusinessDetail->update($UpdateUserBusinessDetailData);

                    }else{

                        Auth::user()->update('user_type_id', Config::get('constants.UserTypeIds.Professional'));

                        UserBusinessDetail::updateOrCreate(['user_id' => Auth::user()->id],$UpdateUserBusinessDetailData);
                    }


                }

            }


            if(Auth::user()->isAdminLoggedIn() || Auth::user()->isSuperAdminLoggedIn()){

                return redirect()->route('user.index');

            }

        } catch (\Throwable $e) {
            DB::rollback();
            $ErrorMsg = $e->getMessage();
        }

        if ($ErrorMsg == "") {
            DB::commit();
            return redirect()->back()->with('message', 'Successfully Updated.');
        } else {
            dd($ErrorMsg);
            return redirect()->back()->with('message', $ErrorMsg);
        }

    }

    public function addUserBusinessService(Request $request){

        $data = [];
        $data['message'] = '';
        $newVal = $request->service_name;
        $getUserInterest = Auth::user()->UserBusinessDetail->UserBusinessServices->pluck('service_name');

        if(in_array($newVal, $getUserInterest->toArray())){

             $data['message'] = 'Service Already exsist...!';

        }else{

            UserBusinessService::create([
                'user_business_detail_id' => Auth::user()->UserBusinessDetail->id,
                'service_name' => $newVal
            ]);

            $data['service'] = UserBusinessService::where('user_business_detail_id', Auth::user()->UserBusinessDetail->id)->get();

        }
        return $data;

    }

    public function addUserBusinessCategory(Request $request){

        $data = [];
        $data['message'] = '';
        $newVal = $request->business_category_id;
        $getUserInterest = Auth::user()->UserBusinessDetail->ProfessionalBusinessCategories->pluck('id');

        if(in_array($newVal, $getUserInterest->toArray())){

             $data['message'] = 'Category Already exsist...!';

        }else{

            UserBusinessCategory::create([
                'user_business_detail_id' => Auth::user()->UserBusinessDetail->id,
                'business_category_id' => $newVal
            ]);

            $data['categories'] = UserBusinessDetail::where('user_id',Auth::user()->id)->with('ProfessionalBusinessCategories')->first();
        }
        return $data;

    }

    public function deleteUserBusinessService(Request $request){

        $data = [];
        $data['message'] = '';
        $delVal = $request->service_name;

        if(UserBusinessService::where('service_name', $delVal)->delete()){

            $data['service'] = UserBusinessService::where('user_business_detail_id', Auth::user()->UserBusinessDetail->id)->get();

        }else{

             $data['message'] = 'Cannot delete';

        }

        return $data;
    }

    public function deleteUserBusinessCategory(Request $request){

        $data = [];
        $data['message'] = '';
        $delVal = $request->business_category_id;

        if(UserBusinessCategory::where('business_category_id', $delVal)->delete()){

            $data['categories'] = UserBusinessDetail::where('user_id',Auth::user()->id)->with('ProfessionalBusinessCategories')->first();

        }else{

             $data['message'] = 'Cannot delete';

        }

        return $data;
    }

    public function UpdatePrivacySettings(Request $request){

        $userDetails = Auth::user()->UserDetail->toArray();

       if($userDetails[$request->id]){

        Auth::user()->UserDetail->update([
            $request->id => false
        ]);

       }
       else{

        Auth::user()->UserDetail->update([
            $request->id => true
        ]);

       }

       return 'status Updated';

    }
}
