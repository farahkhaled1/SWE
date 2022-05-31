<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App\Post;

class ku extends Controller

{
    //
    public function index(Request $request)
    {
        //     $data = $request->all();
        //     return view('multiplecheckboxdemo', ['data' => '$data']);
        // }

        // public function create()
        // {
        //     return view('specs2/ku');
        // }

        // public function store(Request $request)
        // {
        //     $input = $request->all();
        //     $input['content'] = $request->input('content');
        //     Post::create($input);
        //     return redirect()->route('ku');



        $arrayTostring = implode(',', $request->input('ilos'));
        echo $arrayTostring;
        exit();
        $inputvalue['ilos'] = $arrayTostring;
    }
}
