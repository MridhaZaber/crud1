<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    protected $dates = [
        'created_at'
    ];

    protected $guarded = ['email_verification_token', 'reset_token'];
}