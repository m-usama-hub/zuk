<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use AppHelper;

class BusinessHousemate extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'business_id',
        // 'name',
        // 'email',
        // 'age',
        // 'contact_no',
        'isProfilePhotoPrivate',
        'cover_image',
        'isPhonePrivate',
        'isEmailPrivate',
        'title',
        'address',
        'slug',
        'lat',
        'lng',
        'available_now',
        'available_date',
        'room_capacity',
        'room_type',
        'description',
        'interested_in',
        'photo',
        'status'
    ];

    protected $appends = [
        'link',
        'email',
        'contact_no',
        'profile_pic'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        $stringForslug = $value . ' ' . Str::random();

        $this->attributes['slug'] = Str::slug($stringForslug);
    }

    public function getLinkAttribute()
    {
        return route('HousemateDetail',$this->slug??'no-slug');
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public static function getModalId()
    {
        return 'posthousemate';
    }

    public function BusinessDetail(){

        return $this->belongsTo('App\Models\UserBusinessDetail','business_id');
    }

    public function CoverImages(){

        return $this->hasMany('App\Models\BusinessImage','model_record_id')->where('model','Housemate')->orderby('sort_order');
    }

    public function FristCoverImage(){

        return $this->hasOne('App\Models\BusinessImage','model_record_id')->where('model','Housemate')->orderby('sort_order');

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
