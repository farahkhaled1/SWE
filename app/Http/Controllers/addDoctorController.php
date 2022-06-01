<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Models\DrDeleteModel;
use Illuminate\Support\Facades\DB;
use App\Models\courses;
use App\Models\courses\doctor;


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



    public function Adddata(Request $request)
    {

        //POST
        $doctor = new doctor();
        $doctor->name = strip_tags($request->input('name'));
        $doctor->doctorid = strip_tags($request->input('id'));
        $doctor->email = strip_tags($request->input('email'));
        $doctor->save();
        return back(); //basically refreshes after data is sent.
    }
}
?>