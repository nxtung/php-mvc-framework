<?php
namespace App\Controllers;
use Core\Request;

class HomeController
{
    public function test(Request $request)
    {
        $test_string = "Developing Framework";
        return view('home.index', compact('test_string'));
    }
}