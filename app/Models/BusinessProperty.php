<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use AppHelper;

class BusinessProperty extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'business_properties';

    protected $fillable =[
        'business_id',
        'source_type',
        // 'source_name',
        // 'source_phone',
        'for_type',
        'title',
        'slug',
        // 'email',
        // 'contact_no',
        'property_type',
        'property_beds',
        'property_baths',
        'address',
        'lat',
        'lng',
        'town',
        'country',
        'zipcode',
        'sale_price',
        'description',
        'other_info',
        'cover_image',
        'status',
        'views'
    ];

    protected $appends = [
        'link'
    ];

    public function getLinkAttribute()
    {
        return route('PropertyDetail',$this->slug??'no-slug');
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
        return 'buisness_property';
    }

    public function IsFavourite(){

            return $this->hasOne('App\Models\UserFavorite','record_id')
                        ->where('model_table',$this->getTableName())
                        ->where('user_id',Auth::user() ? Auth::user()->id : 0);

    }

    public function CheckFavourite(){

        return $this->IsFavourite;
    }


    public function BusinessDetail(){

        return $this->belongsTo('App\Models\UserBusinessDetail','business_id');
    }

    public function CoverImages(){

        return $this->hasMany('App\Models\BusinessImage','model_record_id')->where('model','Property')->orderby('sort_order');
    }

    public function FristCoverImage(){

        return $this->hasOne('App\Models\BusinessImage','model_record_id')->where('model','Property')->orderby('sort_order');

    }

    public function scopePublish($query){

        return $query->where('status','Publish');
    }

    public function scopeAll($query){

        return $query;
    }

    public function scopeSale($query){

        return $query->where('for_type','Sale');
    }

    public function scopeRent($query){

        return $query->where('for_type','Rent');
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

    public function scopeSearch($query){

        if(request()->has('address')){

            return $query->where('address', 'like', '%' . request()->address . '%');

        }

        return $query;

    }

}
