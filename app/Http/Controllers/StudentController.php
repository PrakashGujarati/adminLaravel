<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')->get();
        return view('students.view',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $flag = DB::table('students')->insert([
            'roll_no'=>$request->roll_no,
            'name'=>$request->name,
            'enrollment_no'=>$request->enrollment_no,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'city'=>$request->city
        ]);

        if($flag)
        {
            return redirect()->route('student.index');
        }else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = DB::table('students')->where('id',$id)->first();
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $flag = DB::table('students')->where('id',$id)->update([
            'roll_no'=>$request->roll_no,
            'name'=>$request->name,
            'enrollment_no'=>$request->enrollment_no,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'city'=>$request->city
        ]);

        if($flag)
        {
            return redirect()->route('student.index');
        }else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flag = DB::table('students')->where('id',$id)->delete();

        if($flag)
        {
            return redirect()->route('student.index');
        }else
        {
            return redirect()->back();
        }
    }
}
