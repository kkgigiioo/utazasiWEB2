<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class travelAgencyController extends Controller
{
    public function index()
    {
        $travel =\App\Travels::orderBy('created_at','DESC')->get();
        return view('welcome', ['travel' => $travel]);
    }
}
