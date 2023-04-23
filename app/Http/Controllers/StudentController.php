<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $st=Student::all();
        return view('student.index',['students'=>$st]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $st1=new Student;
        $st1->firstname=$request->firstname;
        $st1->lastname=$request->lastname;
        $st1->gender=$request->gender;
        $st1->grade_id=$request->grade;
        $st1->school=$request->school;
        $st1->phone=$request->phone;
        $st1->email=$request->email;
        $st1->address=$request->address;
        $st1->save(); 
        
        // $validatedData = $request->validate([
        //     'firstname'=>'required',
        //     'lastname'=>'required',
        //     'gender'=>'required',
        //     'grade'=>'required',
        //     'school'=>'required',
        //     'phone'=>'required',
        //     'email'=>'required',
        //     'photo'=>'norequired',
        //     'address'=>'required'

        // ]);
        // Student::create($validatedData);
         return redirect('/stu')->with('Success','student saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $st=Student::findOrFail($id);
        return view('student.show',compact('st'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $st=Student::findOrFail($id);
        return view('student.edit',compact('st'));
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
        /* $st1=Student::findOrFail($id);
        $st1->firstname=$request->firstname;
        $st1->lastname=$request->lastname;
        $st1->gender=$request->gender;
        $st1->grade=$request->grade;
        $st1->school=$request->school;
        $st1->phone=$request->phone;
        $st1->email=$request->email;
        $st1->address=$request->address;
        $st1->update();  */

        $validatedData=$request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'grade'=>'required',
            'school'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'photo'=>'norequired',
            'address'=>'required'
        ]);
        Student::whereId($id)->update($validatedData);
        return redirect('/stu')->with('success','Student update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $st=Student::findOrFail($id);
        $st->delete();
        return redirect('/stu')->with('success','Successfully Deleted');
    }

   
    public function photo()
    {
        return view('student.uploadphoto');
    }
    
}
