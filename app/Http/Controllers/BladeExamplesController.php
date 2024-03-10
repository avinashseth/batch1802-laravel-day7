<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeExamplesController extends Controller
{
    function sendingData()
    {

        $user = [
            'name' => 'John Doe',
            'email' => '<a href="mail:john@example.com">john@example.com</a>'
        ];
    
        return view('sending-data')
            ->with('user', $user);

    }

    function jsFramework()
    {
        return view('js-framework');
    }

    function convertToJson()
    {

        return view('convert-to-json');

    }
}
