<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInterest extends Model
{
	public $table = "user_interest";
	protected $guarded = [];

	public function User(){
      return $this->belongsTo('App\Models\User','user_id');
    }
}
