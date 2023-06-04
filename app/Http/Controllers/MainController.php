<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class MainController extends Controller
{
    public function student(){
        $student = Student::all();
        $data = compact('student');
        return view('student')->with($data);
    }
    public function create(Request $request){
        $student = new Student;
        $student->name = $request['name'];
        $student->section = $request['section'];
        $student->gender = $request['gender'];
        $student->save();
        return redirect()->route('student.all');
    }
    public function add(){
        $url = '/create';
        $title = 'Register Student';
        $data = compact('url', 'title',);
        return view('createstudent')->with($data);
    }

    public function delete_student($id){
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.all');

    }
    public function edit($id){
       $student = Student::find($id);
       $url = '/update/'.$id;
       $title = 'Update Student';
       $data = compact('student', 'url', 'title');
       return view('update')->with($data); 
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->name=$request['name'];
        $student->section= $request['section'];
        $student->gender=$request['gender'];
        $student->save();
        return redirect()->route('student.all');
    }

}
