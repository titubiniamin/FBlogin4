<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function firebase()
    {
        return view('test_firebase');
    }
}
