<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentConsultations extends Model
{
    protected $table = 'studentsConsultations';

    //turning off created_at and updated_at in users table
    public $timestamps = false;

    //declare table rows
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
