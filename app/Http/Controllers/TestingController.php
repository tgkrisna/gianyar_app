<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Testing;

class TestingController extends Controller
{
    public function index()
    {
        $a = Testing::all();
        return view('testing/index',compact('a'));
    }
}
