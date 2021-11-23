<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Session;

class ChangeLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // if(Auth::user()){
        //     app()->setLocale('en');
        // }

        $appLang = Session::get('locale') == null ? 'en' : Session::get('locale');

        app()->setLocale($appLang);

        return $next($request);
    }
}
