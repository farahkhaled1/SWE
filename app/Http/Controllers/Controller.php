<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function update_aims(Request $reques)
    {

        $content = $reques->content;
        DB::table('aims')->insert(['spec_id' => '1', 'content' => $content]);
        // return redirect()->back()->with('success_message','any message you want');
    }

    public function update_specs5(Request $request)
    {
        $content = $request->content;
        DB::table('assessmentmethod')->insert(['spec_id' => '1', 'content' => $content]);
        
    }

    public function saveRecord(Request $request)
    {
        //$content = $request->content;
       // DB::table('tlmethods')->insert(['spec_id' => '1', 'content' => 'trdfygjh']);
       $data = $request->all();
       foreach($data as $item => $value){
        DB::table('tlmethods')->insert(['spec_id' => auth()->user()->id, 'content' => $value]);
       }
       // dd($request);
       
    }
    public function update_ku(Request $request)
    {
        //dd($request['1']);
        $data = $request->all();
        foreach ($data as $key => $value) {
            DB::table('ilos')->insert(['content' => $value, 'type' => 'k-u', 'specs(form)_id' => '1']);
        }
        return view('ilos2');
    }

    public function update_is(Request $request)
    {

        $data = $request->all();
        foreach ($data as $key => $value) {
            DB::table('ilos')->insert(['content' => $value, 'type' => 'i-s', 'specs(form)_id' => '1']);
        }
        return view('ilos3');
    }

    public function update_pps(Request $request)
    {
        $content = $request->content;
        DB::table('ilos')->insert(['content' => $content, 'type' => 'p-p-s', 'specs(form)_id' => '1']);
        return view('ilos4');
    }

    public function update_gts(Request $request)
    {
        $content = $request->content;
        DB::table('ilos')->insert(['content' => $content, 'type' => 'g-t-s', 'specs(form)_id' => '1']);
        return view('specs4');
    }
    public function course_details(Request $request)
    {
        $content = $request->content;
    }
}
