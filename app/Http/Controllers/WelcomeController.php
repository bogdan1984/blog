<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function boot()
    {
        return view('test/welcome');
    }
}


