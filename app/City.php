<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
