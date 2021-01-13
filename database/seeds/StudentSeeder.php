<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('students')->insert(["name"=>"Rutvi","enrollment_no"=>19090123,"roll_no"=>1,"mobile"=>"9898598985","email"=>"rutvi@gmail.com","city"=>"rajkot"]);
       DB::table('students')->insert(["name"=>"Dhruv","enrollment_no"=>19090123,"roll_no"=>1,"mobile"=>"9898598985","email"=>"rutvi@gmail.com","city"=>"rajkot"]);
       DB::table('students')->insert(["name"=>"Hinal","enrollment_no"=>19090123,"roll_no"=>1,"mobile"=>"9898598985","email"=>"rutvi@gmail.com","city"=>"rajkot"]);
       DB::table('students')->insert(["name"=>"Rahul","enrollment_no"=>19090123,"roll_no"=>1,"mobile"=>"9898598985","email"=>"rutvi@gmail.com","city"=>"rajkot"]);
       DB::table('students')->insert(["name"=>"Abhishek","enrollment_no"=>19090123,"roll_no"=>1,"mobile"=>"9898598985","email"=>"rutvi@gmail.com","city"=>"rajkot"]);
    }
}
