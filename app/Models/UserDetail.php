<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use Auth;
use carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "user_details";

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'email',
        'country',
        'city',
        'state',
        'zipcode',
        'address',
        'details',
        'contact_no',
        'contact_no_verified',
        "contact_no_verification_id",
        'profile_pic',
        'user_profile_video',
        'user_profile_pic',
        'isEmailPublic',
        'isPhoneNoPublic',
        'isProfilePicPublic',
        'isNotificationEnabled',
        'isActive'
    ];

    protected $appends = [
        'fullname',
        'createdAgo',
    ];

    public function User(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function setUpdatedAtAttribute($value){
        return Carbon::now();
    }

    public function hasVerifiedPhone(){

        return $this->contact_no_verified != null ? true : false;
    }

    public function getFullNameAttribute(){

        return $this->firstname.' '.$this->lastname;
    }

    public function Applications(){
        return $this->hasMany('App\Models\UserInternshipApplication','user_id','user_id');
    }

    public function UserInterests(){
        return $this->hasMany('App\Models\UserInterest','user_id','user_id');
    }

    public function UserFavorites(){
        return $this->hasMany('App\Models\UserFavorite','user_id','user_id')->orderby('created_at','DESC');
    }

    public function getCreatedAgoAttribute($full = false){

        $datetime = $this->created_at;
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    public function UserCanAccessData(){

        if(Auth::user()){


            return Auth::user()->id == $this->user_id ? true : false;

        }

        return false;
    }

    public function getEmailAttribute($value){

        return $this->isEmailPublic ? $value : 'Hidden';

    }

    public function getProfilePicAttribute($value){

        return $this->isProfilePicPublic ? $value : 'img/default.png';

    }

    public function getContactNoAttribute($value){

        return $this->isPhoneNoPublic ? $value : 'Hidden';

    }

    // public function getContactNoVerificationIdAttribute($value){

    //     $time1 = new DateTime($this->updated_at);
    //     $time2 = new DateTime(date(now()));
    //     $interval = $time1->diff($time2);
    //     $seconds = $interval->format('%s');

    //     return $seconds;

    // }




}
