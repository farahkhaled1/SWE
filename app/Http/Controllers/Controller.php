<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function update_profile(Request $reques)
    {
        $content = $reques->content;
        DB::table('aims')->insert(['spec_id' => '1', 'content' => $content]);
        return response()->json(['status' => 'DONE']);
    }

    public function update_ku(Request $request)
    {
        $content = $request->content;
        DB::table('ilos')->insert(['content' => $content, 'type' => 'k&u', 'specs(form)_id' => '1']);

        return response()->json(['status' => 'DONE']);
    }
}
