<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminsConsultations extends Model
{
    protected $table = 'adminsConstultations';

    public $timestamps = false;

    protected $fillable = [
        'consultation_start',
        'consultation_end'
    ];
}
