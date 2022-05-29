<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrDeleteModel;
class DrDeleteController extends Controller
{
    function list()
    {
        return view('doctordetails');
    }
}
