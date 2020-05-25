<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaysOff extends Model
{
    protected $table = 'daysOff';

    public $timestamps = false;

    protected $fillable = [
      'consultation_date',
    ];
}
