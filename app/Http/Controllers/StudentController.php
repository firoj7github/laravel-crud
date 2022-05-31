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
}
