<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){
        $search = $request['search'] ?? "";
        if($search){
            $students = Student::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
        }
        else{
            $students = Student::all();
        }
       
        return view('search.index',compact('students','search'));
    }
}
