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

    function ifStatement()
    {
        $age = rand(17,18);
        return view('if-statement')
            ->with('age', $age);
    }

    function unlessStatement()
    {

        $number = rand(1, 10);

        return view('unless')
            ->with('number', $number);

    }

    function appStage()
    {
        return view('app-stage');
    }
}
