<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\UserBusinessDetail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Config;
use AppHelper;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    public function showRegistrationForm()
    {
        return redirect()->back()->with("RegisterUser","Please Register first.");

        // return view('auth.register');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user_type_id = array_key_exists('company', $data) ? Config::get('constants.UserTypeIds.Company') : Config::get('constants.UserTypeIds.User');
        
        $role = 'User';
        
        $user = User::create([
            'name' => $data['firstname'].' '.$data['lastname'],
            'email' => $data['email'],
            'user_type_id' => $user_type_id,
            'password' => Hash::make($data['password']),
        ]);

        if($user_type_id == Config::get('constants.UserTypeIds.User')){

            $location = AppHelper::getIpData();

            UserDetail::create([
                'user_id'=>$user->id,
                'firstname'=>$data["firstname"],
                'lastname'=>$data["lastname"],
                'email' => $data['email'],
                'country' => $location->countryName,
                'city' => $location->cityName,
                'state' => $location->regionName,
                'zipcode' => $location->zipCode,
            ]);


            if($data['business_name'] != null){

                UserBusinessDetail::create([
                    'user_id'=>$user->id,
                    'business_name'=>$data['business_name'],
                ]);

                $role = 'User';

            }

        }

        $user->assignRole($role);

        return $user;
    }
}
