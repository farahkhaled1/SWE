<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\courses;

class DrDeleteController extends Controller
{
    function list()
    {
        $data =DB::select("select * from courses");
        return view('doctordetails',['courses'=>$data]);
    }

    public function delete($code)
    {
        DB::delete('delete from courses where code=? ', [$code]);
        return redirect('doctordetails')->with('status','data deleted succesfully');
    }
    
}


