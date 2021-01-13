<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::where('city',"Rajkot")->orderBy('id', 'asc')->get();//DB::table('students')->get();
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
        $request->validate([
            'enrollment_no' => "required",
            'name' => "required",
            'roll_no' => "required | numeric",
            'email' => "required",
            'mobile' => "required",
            'city' => "required"]);

        //return $request->all();
        //$flag = Student::create($request->all());

        $student = new Student;
        $student->enrollment_no = $request->enrollment_no;
        $student->name = $request->name;
        $student->roll_no = $request->roll_no;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->city = 'Rajkot';
        $flag = $student->save();


        /*DB::table('students')->insert([
            'roll_no'=>$request->roll_no,
            'name'=>$request->name,
            'enrollment_no'=>$request->enrollment_no,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'city'=>$request->city
        ]);*/

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
        $student = Student::find($id);//DB::table('students')->where('id',$id)->first();
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
        $request->validate([
            'enrollment_no' => "required",
            'name' => "required",
            'roll_no' => "required | numeric",
            'email' => "required",
            'mobile' => "required",
            'city' => "required"]);
            
        /*$flag = DB::table('students')->where('id',$id)->update([
            'roll_no'=>$request->roll_no,
            'name'=>$request->name,
            'enrollment_no'=>$request->enrollment_no,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'city'=>$request->city
        ]);*/

        /*$student = Student::where('id',$id)->first();
        $student->enrollment_no = $request->enrollment_no;
        $student->name = $request->name;
        $student->roll_no = $request->roll_no;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->city = $request->city;
        $flag = $student->save();*/

        $flag = Student::find($id)->update($request->all());

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
        $flag = Student::find($id)->delete();
        //DB::table('students')->where('id',$id)->delete();

        if($flag)
        {
            return redirect()->route('student.index');
        }else
        {
            return redirect()->back();
        }
    }
}
