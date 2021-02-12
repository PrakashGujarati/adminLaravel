<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','enrollment_no','roll_no','mobile','email','city_id'];

    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }

    public function idcard()
    {
        return $this->belongsTo(Idcard::class,'idcard_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subject');
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = "MScIT Student ".$value;
    }
}
