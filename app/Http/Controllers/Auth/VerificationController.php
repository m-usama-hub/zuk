<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use AppHelper;
use Auth;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;


    public function show(Request $request)
    {
        if ($request->user()->hasVerifiedEmail() == false) {

            return redirect('/');
        }
    }

    public function SendVerificationSMS(){

        $data['message'] = '';
        $data['status'] = false;
        $number = Auth::user()->UserDetail->contact_no;
        try{

            if($number == null){

                $data['message'] = 'Contact No is not provided';
            }

            if($data['message'] == ''){


                $request_id = AppHelper::SendSms($number);

                Auth::user()->UserDetail->update([
                    "contact_no_verification_id" => $request_id
                ]);

                $data['status'] = true;
                $data['message'] = 'Message Send Successfully. Valid for 5 mints.';

            }


        }catch(\Throwable $e){

            $data['message'] = $e->getMessage();
        }

        return $data;

    }

    public function verifySMS(Request $request){

        $data['message'] = '';
        $data['status'] = false;
        $request_id = Auth::user()->UserDetail->contact_no_verification_id;
        try{

            if($request->code == null){
                $data['message'] = 'Please enter a code...!';
            }

            if($request_id == null){

                $data['message'] = 'Code is expired....!';
            }

            if($data['message'] == ''){

                $response = AppHelper::VerifySms($request_id,$request->code);

                if($response){

                    Auth::user()->UserDetail->update([
                        "contact_no_verified" => date(now())
                    ]);

                    $data['status'] = true;
                    $data['message'] = 'Verified Successfully....!';

                }else{

                    $data['message'] = 'Code Mismatch...!';
                }
            }


        }catch(\Throwable $e){

            $data['message'] = $e->getMessage();
        }

        return $data;
    }

    /**
     * Where to redirect users after verification.
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
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
