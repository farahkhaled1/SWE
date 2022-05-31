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
        // return response()->json(['status' => 'DONE']);
        // return redirect('specs2')
        return view('specs2');
    }

    public function update_ku(Request $request)
    {
        // dd($request);
        $content = $request->content;
        DB::table('ilos')->insert(['content' => $content, 'type' => 'k-u', 'specs(form)_id' => '1']);


        return view('ilos2');
    }

    public function update_is(Request $request)
    {
        $content = $request->content;
        DB::table('ilos')->insert(['content' => $content, 'type' => 'i-s', 'specs(form)_id' => '1']);

        // return response()->json(['status' => 'DONE']);
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
        return view('specs2');
    }
}
