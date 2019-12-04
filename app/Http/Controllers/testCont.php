<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testCont extends Controller
{
    //
    public function index(Request $get){
        return view('welcome',compact("get"));
    }
}
