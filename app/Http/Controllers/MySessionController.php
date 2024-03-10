<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySessionController extends Controller
{
    function getCreateSession(Request $request)
    {
        $request->session()->put('name', 'Avinash');
    }

    function getSessionValue(Request $request)
    {
        echo $request->session()->get('name');
    }
    function getDeleteSession(Request $request)
    {
        echo 'Current Sessions <br />';
        echo '<pre>' , print_r($request->session()->all(), true), '</pre>';
        $request->session()->forget('name');
        echo '<br />Sessions after deleting <br />';
        echo '<pre>' , print_r($request->session()->all(), true), '</pre>';
    }
}
