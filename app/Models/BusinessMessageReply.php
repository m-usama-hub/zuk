<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessMessageReply extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'business_message_replies';

    public function User()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
