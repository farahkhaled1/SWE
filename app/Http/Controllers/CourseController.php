<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\courses;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function show()
    {
        
        $courses = courses::all(); #courses::all() is the name of class in the model 
        return view('assign1', compact('courses')); #courses here is the name of the variable in the previous line in class
        
        return $courses;
        // return view('assign1',compact('Course'));
      
    }

    public function CourseTable()
    {
        
        $courses = courses::all(); #courses::all() is the name of class in the model 
        return view('coursesDetails', compact('courses')); #courses here is the name of the variable in the previous line in class
        return $courses;
        // return view('assign1',compact('Course'));
      
    }



    public function showDr()

   // public function showdoctord()

 //   public function showdoctord()

   // public function showdoctord()

    {
        
        $courses = courses::all(); #courses::all() is the name of class in the model 
        return view('doctordetails', compact('courses')); #courses here is the name of the variable in the previous line in class
        return $courses;

        // return view('assign1',compact('Course')); 
    }
    public function Checklist()
    {
        
        $courses = courses::all(); #courses::all() is the name of class in the model 
        return view('Checklist', compact('courses')); #courses here is the name of the variable in the previous line in class
        return $courses;
        
      

        // return view('assign1',compact('Course'));
      

        // return view('assign1',compact('Course'));
      

        // return view('assign1',compact('Course'));
      

    }
    public function courseAssesment()
    {
        $result = DB::Table('courses')->select('code','title','semester','department_teaching','assistant','coordinator_id')->where('coordinator_id',5)->get();
        return view('courseAssesment',['courseAssesment'=>$result]);
        // $courses = courses::all(); #courses::all() is the name of class in the model 
        // return view('courseAssesment', compact('courses')); #courses here is the name of the variable in the previous line in class
        // return $courses;
        // return view('assign1',compact('Course')); 
    }
    
}
