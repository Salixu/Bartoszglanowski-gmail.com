<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentConsultations extends Model
{
    protected $table = 'studentsConsultations';

    public $timestamps = false;

    protected $fillable = [
      'student_name',
      'student_surname',
      'student_mail',
      'student_message',
      'subject',
      'status',
      'consultation_date',
      'consultation_start',
      'consultation_end',
    ];
}
