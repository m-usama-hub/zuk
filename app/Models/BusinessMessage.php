<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Str;
use AppHelper;

use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessMessage extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'business_messages';

    protected $fillable =[
        'business_id',
        'cover_image',
        'isProfilePhotoPrivate',
        'isContactNoPrivate',
        'isEmailPrivate',
        'title',
        'slug',
        'message',
        'broadcast_radius',
        'address',
        'lat',
        'lng',
        'country',
        'photo',
        'status'
    ];
    
    protected $appends = [
        'link',   
        'email',
        'contact_no',
        'profile_pic'
    ];

    public function Replies()
    {
        return $this->hasMany('App\Models\BusinessMessageReply','business_message_id');
    }

    public function Likes()
    {
        return $this->hasMany('App\Models\BusinessMessageLike','business_message_id');
    }

    public function MyLike(){

        return $this->hasOne('App\Models\BusinessMessageLike','business_message_id')->where('user_id',Auth::user()->id);
    }

    public function CheckLike(){

        if(Auth::user()){
            
            return $this->MyLike ? true : false;
        }

        return false;

    }

    public function getLinkAttribute()
    {
        return route('MessageDetail',$this->slug??'no-slug');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        $stringForslug = $value . ' ' . Str::random();

        $this->attributes['slug'] = Str::slug($stringForslug);
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public static function getModalId()
    {
        return 'postmessage';
    }

    public function BusinessDetail(){

        return $this->belongsTo('App\Models\UserBusinessDetail','business_id');
    }

    public function getEmailAttribute($value){

        return $this->isEmailPrivate ? $this->BusinessDetail->BusinessUser->email : 'Email is Hidden';

    }

    public function getProfilePicAttribute($value){

        return $this->isProfilePhotoPrivate ? $this->BusinessDetail->BusinessUser->profile_pic : 'img/default.png';

    }

    public function getContactNoAttribute($value){

        return $this->isPhonePrivate ? $this->BusinessDetail->BusinessUser->contact_no : 'Phone is Hidden';

    }

    public function scopePublish($query){

        return $query->where('status','Publish');
    }

    public function IsFavourite(){

        return $this->hasOne('App\Models\UserFavorite','record_id')
                    ->where('model_table',$this->getTableName())
                    ->where('user_id',Auth::user() ? Auth::user()->id : 0);


    }

    public function CheckFavourite(){

        return $this->IsFavourite;
    }

    public function scopeNearMeOrRadius($query){

        if(request()->has('radius') && request()->radius != null){

            $radius = request()->radius;    
            $kmS = $radius * 1.60934;

            return AppHelper::searchData($query,$kmS);

        }

        return $query;

    }

    public function scopeSearch($query){

        if(request()->has('address')){

            return $query->where('address', 'like', '%' . request()->address . '%');

        }

        return $query;

    }
}
