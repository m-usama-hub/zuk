<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessReview extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'user_id',
        'business_id',
        'service_provided',
        'review',
        'quality_rating',
        'timeliness_rating',
        'cleanliness_rating',
        'budget_rating',
        'coummunication_rating'
    ];

    protected $appends = [
        'reviewAvg'
    ];

    public function setReviewAttribute($value)
    {
        $this->attributes['review'] = $value;
        $this->attributes['user_id'] = Auth::user()->id;
        
    }

    public function User(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function ProfessionalBusiness(){
        return $this->belongsTo('App\Models\UserBusninessDetail','business_id');
    }

    public function getReviewAvgAttribute(){

        return ($this->quality_rating + 
                $this->coummunication_rating + 
                $this->timeliness_rating + 
                $this->cleanliness_rating + 
                $this->budget_rating)/5;
    }
}
