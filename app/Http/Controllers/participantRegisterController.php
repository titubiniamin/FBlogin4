<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class participantRegisterController extends Controller
{
    function register(Request $request)
    {

        $request->validate([
            'fname' => "required|max:40",
            'lname' => "required|max:40",
                    ], [],
            [
                'fname' => 'First Name',
                'lname' => 'Last Name',

            ]);
        print_r($request->all());
    }
}
