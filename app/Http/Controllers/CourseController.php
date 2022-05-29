<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\courses;

class CourseController extends Controller
{
    public function show()
    {
        
        $courses = courses::all(); #courses::all() is the name of class in the model 
        return view('assign1', compact('courses')); #courses here is the name of the variable in the previous line in class
        return $courses;
        // return view('assign1',compact('Course'));
      
    }
    public function show1()
    {
        
        $courses = courses::all(); #courses::all() is the name of class in the model 
        return view('coursesDetails', compact('courses')); #courses here is the name of the variable in the previous line in class
        return $courses;
        // return view('assign1',compact('Course'));
      
    }
}
