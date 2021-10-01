<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use Config;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;


class FacebookController extends Controller
{
    /**

     * Create a new controller instance.
     *
     * @return void

     */

    public function redirectToFacebook()
    {

        return Socialite::driver('facebook')->redirect();
    }


    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function handleFacebookCallback()
    {
        // try {

            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('provider_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->route('home');

            }else{


                $findUserEmail = User::where('email', $user->email)->first();

                if($findUserEmail){

                    return redirect()->route('login')->with('status','User already exsit....! Try using Credentials.');

                }

                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'email_verified_at' => Date(now()),
                    'user_type_id' => Config::get('constants.UserTypeIds.User'),
                    'provider_id'=> $user->id,
                    'provider'=> 'facebook',
                    'password' => Hash::make('Test123456')
                ]);

                $location = AppHelper::getIpData();

                UserDetail::create([
                    'user_id' => $newUser->id,
                    'firstname' => $user->name,
                    'country' => $location->countryName,
                    'city' => $location->cityName,
                    'state' => $location->regionName,
                    'zipcode' => $location->zipCode,
                ]);

                $newUser->assignRole('User');

                Auth::login($newUser);

                return redirect()->route('home');

            }

        // } catch (Exception $e) {

        //     dd($e);

        //     return redirect()->back()->with('error',$e->getMessage());

        // }

    }

}

