<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    //turning off created_at and updated_at in users table
    public $timestamps = false;

    //declare table rows
    protected $fillable = [
        'username',
        'email',
        'first_name',
        'last_name'
    ];
}