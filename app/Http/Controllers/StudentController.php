<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
  public function signin()
  {
      return view('signin');
  }
  public function signup()
  {
      return view('signup');
  }

  public function submitData(Request $data)
  {
     $name=$data->name;
     $email=$data->email;
     $phone=$data->phone;
     $student= new Student();
     $student->name= $name;
     $student->email= $email;
     $student->phone= $phone;
     $student-> save();
     return redirect()->back();
  }
  public function list(){
    $students=Student::get();
    return view ('student-list', compact('students'));
  }
  public function delete_student($id){
  $data=Student::find($id);
  $data->delete();
  return redirect()->back();
  }
  public function edit_student($id){
    $data=Student::find($id);
    return view('edit_student', compact('data'));
  }
  public function update_student(Request $update, $id){
    $data=Student::find($id);
    $data->name=$update->name;
    $data->email=$update->email;
    $data->phone=$update->phone;
    $data->save();
    return redirect()->back();
  }
}
