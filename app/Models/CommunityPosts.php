<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityPosts extends Model
{
    protected $fillable = [
        'user_id',   // link journal entry to user
        'username',     
        'content',   
    ];
}
