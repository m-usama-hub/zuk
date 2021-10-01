<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BusinessCategory extends Model
{
    protected $table = "business_categories";
    use HasFactory;
        use SoftDeletes;

    protected $guarded = [];
}
