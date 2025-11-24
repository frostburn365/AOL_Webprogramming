<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
}