<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBusinessCategory extends Model
{
    use HasFactory;

    protected $table = "user_business_categories";

    protected $guarded = [];

}
