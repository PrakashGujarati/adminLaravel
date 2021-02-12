<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;


class TestController extends Controller
{
    public function index()
    {

/*        $student = Student::find(3);
        //$student->subjects()->attach([1,2,3]);
        //$student->subjects()->detach([1,2,3]);
        $student->subjects()->sync([3]);*/


        return "success";        
        //return dirname(__FILE__);
        //return view('form');
        //1. Retrive all records
        //$orders = DB::table('orders')->get();
        
        //8. Count all orders
        //return DB::table('orders')->count();
        
        //2. retrive some records based on data and patient id
        //return DB::table('orders')->where('patient_id',3)->get();

        //3. retrive single record using id (pi)
        //$order = DB::table('orders')->where('id',3)->first();
        //return $order->paid_amount;

        //4. retrive sum of amount from today's orders
        //$orders = DB::table('orders')->whereDate('created_at','2020-09-12')->sum('paid_amount');
        //return $orders;

        //7. retrive total paid_amount and due_amount all records from month wise
        //$due_amount = DB::table('orders')->whereMonth('created_at','10')->sum('due_amount');
        //$paid_amount = DB::table('orders')->whereMonth('created_at','10')->sum('paid_amount');
        //return $orders;
        //5. retrive above than 5000 order amount records
        //$orders = DB::table('orders')->where('paid_amount','<',5000)->get();
        //return $orders;

        //count number of all where cash amount records or credit
        //$orders = DB::table('orders')->where(['patient_id'=>3,'charge_id'=>2])->get();
        //return $orders;

        // using pluck retrive
        //return DB::table('cities')->where('state','Gujarat')->pluck('city','id');
        //$orders = DB::table('orders')->select('order_id','paid_amount','due_amount')->whereDate('created_at','2020-09-12');
        //return $orders->addSelect('id')->get();

        /*return DB::table('orders')
        ->select(DB::raw('count(*) as patient_id'))
        ->whereMonth('created_at','10')->get();*/

        /*
        return DB::table('orders')
        ->select(DB::raw('sum(paid_amount) as total_paid_amount,sum(due_amount) as total_due_amount'))        
        ->whereMonth('created_at','10')->get();*/

        /*return DB::table('orders')
        ->select(DB::raw('sum(paid_amount) as total_paid_amount,sum(due_amount) as total_due_amount, MONTH(created_at) as month, YEAR(created_at) as year'))        
        ->groupBy(DB::raw('YEAR(created_at)'), DB::raw('MONTH(created_at)'))
        ->get();*/
        
        //10 orderby 
        //return DB::table('patients')->orderBy('first_name','DESC')->get();
    }
}
