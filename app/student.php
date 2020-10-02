<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    // use HasFactory;
    protected $table='student';
    protected $fillable = ['course_name', 'course_grade', 'student_id'];
    public $timestamps=false;
}