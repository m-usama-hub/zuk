<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalMessage extends Model
{
    use HasFactory;

    protected $guarded = [];    

    public function ToUser(){

        return $this->belongsTo('App\Models\User','to_id');
    }

    public function FromUser(){

        return $this->belongsTo('App\Models\User','from_id');
    }

    public function MessageReplies()
    {
        return $this->hasMany('\App\Models\PersonalMessage', 'parent_message_id');
    }
}
