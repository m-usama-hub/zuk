<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;
use Str;

class BusinessItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'business_id',
        'firstname',
        'lastname',
        'email',
        'title',
        'slug',
        'price',
        'price_free',
        'item_category_id',
        'delivery_type',
        'website_link',
        'cover_image',
        'location_address',
        'location_lat',
        'location_long',
        'isProfilePhotoPrivate',
        'contact_no',
        'isEmailPrivate',
        'isPhonePrivate',
        'description',
        'status',
        'views'
    ];

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

    public function getEmailAttribute($value){

        return $this->isEmailPrivate ? $value : 'Email is Hidden';

    }

    // public function getProfilePicAttribute($value){

    //     return !$this->isProfilePhotoPrivate ? $value : 'img/default.png';

    // }


    public function BusinessDetail(){

        return $this->belongsTo('App\Models\UserBusinessDetail','business_id');

    }

    public function getContactNoAttribute($value){

        return $this->isPhonePrivate ? $value : 'Phone is Hidden';

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
}
