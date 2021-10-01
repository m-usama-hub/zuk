<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use App\Models\UserDetail;
use Config;
use Illuminate\Support\Facades\Hash;
use AppHelper;

class GoogleController extends Controller
{
    /**

     * Create a new controller instance.
     *
     * @return void

     */

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function CheckUserIfExist()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleGoogleCallback()
    {
        // try {

            $user = Socialite::driver('google')->stateless()->user();

            $finduser = User::where('provider_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->route('home');

            }else{

                $findUserEmail = User::where('email', $user->email)->first();

                if($findUserEmail){

                    return redirect()->back()->with('status','User already exsit....! Try using Credentials.');

                }

                $newUser = User::create([
                    'name' => $user->name,
                    'email_verified_at' => Date(now()),
                    'user_type_id' => Config::get('constants.UserTypeIds.User'),
                    'email' => $user->email,
                    'provider_id'=> $user->id,
                    'provider'=> 'google',
                    'password' => Hash::make('123456du')
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

        //     return redirect()->back()->with('error',$e->getMessage());
        // }

    }

}
