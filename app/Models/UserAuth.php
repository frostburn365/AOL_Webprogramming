<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuth extends Model
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