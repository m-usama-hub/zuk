<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Auth;
use Config;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_type_id',
        'provider',
        'provider_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function UserDetail()
    {
        return $this->hasOne('App\Models\UserDetail','user_id');
    }

    public function UserBusinessDetail()
    {
        return $this->hasOne('App\Models\UserBusinessDetail','user_id');
    }

    public function UserHasBusinessProfile()
    {
        return $this->UserBusinessDetail ? true : false;
    }

    public function isSuperAdminLoggedIn()
    {
        if (Auth::user()->user_type_id == Config::get("constants.UserTypeIds.SuperAdmin")) {
            return true;
        } else {
            return false;
        }
    }

    public function isAdminLoggedIn()
    {
        if (Auth::user()->user_type_id == Config::get("constants.UserTypeIds.Admin")) {
            return true;
        } else {
            return false;
        }
    }

    public function isUserLoggedIn()
    {
        if (Auth::user()->user_type_id == Config::get("constants.UserTypeIds.User")) {
            return true;
        } else {
            return false;
        }
    }

    public function GetProfilePic()
    {
        if (Auth::user()->user_type_id == Config::get("constants.UserTypeIds.User")) {

            return $this->UserDetail->profile_pic != null ? $this->UserDetail->profile_pic : 'img/default.png';
        }
        if (Auth::user()->user_type_id == Config::get("constants.UserTypeIds.Company")) {

            return $this->CompanyDetail->profile_pic != null ? $this->CompanyDetail->profile_pic : 'img/default.png';
        }
        if (Auth::user()->user_type_id == Config::get("constants.UserTypeIds.Admin")) {

            return 'img/default.png';
        }
        if (Auth::user()->user_type_id == Config::get("constants.UserTypeIds.SuperAdmin")) {

            return 'img/default.png';
        }

    }

    public function UserType()
    {
        return $this->belongsTo('App\Models\User_type','user_type_id');
    }

}
