<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Str;

use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessMessage extends Model
{
    use HasFactory;
        use SoftDeletes;
    protected $table = 'business_messages';

    protected $fillable =[
        'business_id',
        'name',
        'email',
        'age',
        'contact_no',
        'cover_image',
        'isProfilePhotoPrivate',
        'isContactNoPrivate',
        'isEmailPrivate',
        'title',
        'slug',
        'message',
        'zipcode',
        'photo',
        'status'
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
        return 'postmessage';
    }

    public function BusinessDetail(){

        return $this->belongsTo('App\Models\UserBusinessDetail','business_id');
    }

    public function getEmailAttribute($value){

        return $this->isEmailPrivate ? $value : 'Email is Hidden';

    }

    // public function getProfilePicAttribute($value){

    //     return $this->isProfilePhotoPrivate ? $value : 'img/default.png';

    // }

    public function getContactNoAttribute($value){

        return $this->isPhonePrivate ? $value : 'Phone is Hidden';

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
}
