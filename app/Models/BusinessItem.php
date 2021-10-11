<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;
use Str;
use AppHelper;

class BusinessItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'business_id',
        'title',
        'slug',
        'price',
        'price_free',
        'item_category_id',
        'delivery_type',
        'website_link',
        'cover_image',
        'location_address',
        'lat',
        'lng',
        'isProfilePhotoPrivate',
        'isEmailPrivate',
        'isPhonePrivate',
        'description',
        'status',
        'views'
    ];

    protected $appends = [
        'link',
        'email',
        'contact_no',
        'profile_pic'
    ];

    public function getLinkAttribute()
    {
        return route('ItemDetail',$this->slug??'no-slug');
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
        return 'itemtosell';
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

    public function ItemCategory(){

        return $this->belongsTo('App\Models\BusinessCategory','item_category_id');

    }

    public function scopePublish($query){

        return $query->where('status','Publish');
    }

    public function scopeAll($query){

        return $query;
    }

    public function scopeNew($query){

        return $query;
    }

    public function IsFavourite(){

        return $this->hasOne('App\Models\UserFavorite','record_id')
                    ->where('model_table',$this->getTableName())
                    ->where('user_id',Auth::user() ? Auth::user()->id : 0);

    }

    public function CheckFavourite(){

        return $this->IsFavourite;
    }

    public function scopeSearch($query){

        if(request()->has('address')){

            return $query->where('location_address', 'like', '%' . request()->address . '%');

        }

        return $query;

    }

    public function scopeNearMeOrRadius($query){

        if(request()->has('radius') && request()->radius != null){

            $radius = request()->radius;

        }else{
            
            $radius = 2;
        }

        $kmS = $radius * 1.60934;

        return AppHelper::searchData($query,$kmS);
    }

}
