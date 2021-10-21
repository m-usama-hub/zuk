<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use AppHelper;

class UserBusinessDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "user_business_details";

    protected $fillable = [
        "user_id",
        "business_name",
        "slug",
        "business_profile_pic",
        "business_profile_video",
        "business_logo",
        "business_phone",
        "address",
        "lat",
        "lng",
        "business_details",
        "business_category_id",
        "business_wallet_available",
        "business_wallet_total",
        "business_wallet_spended"
    ];

    protected $appends = [
        'totalReviewsCount',
        'reviewsAvg',
        'reviewComment',
        'link'
    ];

    public function setBusinessNameAttribute($value)
    {
        $this->attributes['business_name'] = $value;

        $stringForslug = $value . ' ' . Str::random();

        $this->attributes['slug'] = Str::slug($stringForslug);
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function getBusinessLogoAttribute($value)
    {
        return $value == null ? 'Frontend/img/buisness.png' : $value;
    }

    public function getBusinessProfilePicAttribute($value)
    {
        return $value == null ? 'Frontend/img/Group413.png' : $value;
    }

    public function getLinkAttribute($value)
    {
        return route('ProfessionalDetail',$this->slug);
    }

    public function BusinessUser(){

        return $this->belongsTo('App\Models\UserDetail','user_id','user_id');

    }

    public function CoverImages(){

        return $this->hasMany('App\Models\BusinessImage','model_record_id')->where('model','BusinessDetail');
    }

    public function FristCoverImage(){

        return $this->hasOne('App\Models\BusinessImage','model_record_id')->where('model','BusinessDetail');

    }

    public function User(){

        return $this->belongsTo('App\Models\User','user_id');

    }

    public function ProfessionalBusinessCategories(){

        return $this->belongsToMany('App\Models\BusinessCategory','user_business_categories');

    }

    public function UserBusinessServices(){

        return $this->hasMany('App\Models\UserBusinessService','user_business_detail_id');
    }

    public function UserBusinessWallet(){

        return $this->hasOne('App\Models\UserBusinessWallat','user_business_detail_id');
    }

    public function BusinessProperties(){

        return $this->hasMany('App\Models\BusinessProperty','business_id');
    }

    public function BusinessItems(){

        return $this->hasMany('App\Models\BusinessItem','business_id');
    }

    public function BusinessProjects(){

        return $this->hasMany('App\Models\BusinessProject','business_id');
    }

    public function BusinessMessages(){

        return $this->hasMany('App\Models\BusinessMessage','business_id');
    }

    public function BusinessHousemates(){

        return $this->hasMany('App\Models\BusinessHousemate','business_id');
    }

    public function MyPosts(){

        $data = [];

        dd($this->BusinessProjects->get('id','cover_image','title','description','contact_no','created_at'));

        $properties = $this->BusinessProperties->get('id','cover_image','other_info','description','contact_no','created_at');
        $items = $this->BusinessItems->get('id','cover_image','title','description','contact_no','created_at');
        $projects = $this->BusinessProjects->get('id','cover_image','title','description','contact_no','created_at');
        $messages = $this->BusinessMessages->get('id','cover_image','title','message','contact_no','created_at');
        $housemates = $this->BusinessHousemates->get('id','cover_image','title','description','contact_no','created_at');

        // array_push($data,$properties,$items,$projects,$messages,$housemates);

        // $data->orderby('created_at');

        return $data;


    }

    public function scopehasProfessionalCategories($query){

        return $query->where('business_category_id' , '!=', null);
    }

    public function scopeNew($query){

        return $query;

    }

    public function scopeTop($query){

        return $query;

    }

    public function scopeSearch($query){

        if(request()->has('address')){

            return $query->where('address', 'like', '%' . request()->address . '%');

        }

        return $query;

    }

    public function scopeNearMeOrRadius($query){

        if(request()->has('radius') && request()->radius != null ){

            $radius = request()->radius;

        }else{
            
            $radius = 2;
        }
        
        $kmS = $radius * 1.60934;

        return AppHelper::searchData($query,$kmS);

    }

    public function IsFavourite(){

            return $this->hasOne('App\Models\UserFavorite','record_id')
                        ->where('model_table',$this->getTableName())
                        ->where('user_id',Auth::user() ? Auth::user()->id : 0);

    }

    public function CheckFavourite(){

        return $this->IsFavourite;
    }

    public function Reviews(){

        return $this->hasMany('App\Models\BusinessReview','business_id')->orderBy('created_at','DESC');

    }

    public function getReviewsAvgAttribute(){

        return number_format((float)$this->Reviews->avg('reviewAvg'), 1, '.', '');
    }

    public function getReviewCommentAttribute(){

        $avg = $this->Reviews->avg('reviewAvg');
        $comment = 'No Ratings';

        if(count($this->Reviews) > 0){
            
            if($avg >= 4.5 && $avg <= 5.0){

                $comment = 'Excellent';

            }else if($avg >= 4 && $avg < 4.5 ){

                $comment = 'V.Good';

            }else if($avg >= 3 && $avg <= 4 ){

                $comment = 'Good';

            }else if($avg >= 2.5 && $avg <= 3 ){

                $comment = 'Average';

            }else if($avg < 2.5){

                $comment = 'Poor';
            }

        }
        return $comment;
    }

    public function getTotalReviewsCountAttribute(){

        return count($this->Reviews);
    }

    public function UserBusinessServicesString(){

       $services = $this->UserBusinessServices->pluck('service_name');
       $serviceArray = [];
       foreach ($services as $key => $service) {
           array_push($serviceArray, $service);
       }

       return implode(', ',$serviceArray);
    }

    public function UserBusinessCategoriesString(){

        $categories = $this->ProfessionalBusinessCategories->pluck('category');
        $categoryArray = [];
        foreach ($categories as $key => $service) {
            array_push($categoryArray, $service);
        }
 
        return implode(', ',$categoryArray);
    }


}
