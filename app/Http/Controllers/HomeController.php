<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use AppHelper;
use App\Models\UserDetail;
use App\Notifications\MessageEmailNotification;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $EmailData = [
        //     'email' => 'Demoemail@gmail.com',
        //     'title' => 'Demotile',
        //     'body' => 'Demo Body',
        // ];

        // // $delay = now()->addMinutes(10);
        // // $user->notify((new MessageEmailNotification($EmailData))->delay($delay));
        // Auth::user()->notify(new MessageEmailNotification($EmailData));

        if(Auth::user()->isUserLoggedIn()){

            return redirect('/');

        }


        if(Auth::user()->isAdminLoggedIn() || Auth::user()->isSuperAdminLoggedIn()){



            return redirect()->route('user.index');

        }
    }

}
