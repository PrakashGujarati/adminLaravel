<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HarshSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(["name"=>"Harsh","enrollment_no"=>19090123,"roll_no"=>1,"mobile"=>"9898598985","email"=>"rutvi@gmail.com","city"=>"rajkot","country"=>"india"]);
        DB::table('students')->insert(["name"=>"Parth","enrollment_no"=>19090123,"roll_no"=>1,"mobile"=>"9898598985","email"=>"rutvi@gmail.com","city"=>"rajkot","country"=>"india"]);
        
    }
}
