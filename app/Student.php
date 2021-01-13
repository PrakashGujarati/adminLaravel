<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','enrollment_no','roll_no','mobile','email','city'];
}
