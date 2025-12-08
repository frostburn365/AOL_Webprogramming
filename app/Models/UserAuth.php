<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAuth extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserAuthFactory> */
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'Phonenumber',
    ];

    public function posts() : Hasmany
    {
        return $this->hasMany(CommunityPosts::class);
    }
}