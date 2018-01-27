<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendence extends Model
{
    protected $table = 'attendences';
    protected $fillable = ['student_id', 'subject_id'];
}
