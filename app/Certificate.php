<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = ['student_name', 'course_name', 'certificate_photo'];
}
