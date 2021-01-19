<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Idcard extends Model
{
    public $timestamps = false;
    
    public function student()
    {
        return $this->hasOne(Student::class);
    }
}
