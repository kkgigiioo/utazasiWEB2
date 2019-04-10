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

    public function show($id)
    {
        $travel = \App\Travels::where('id', $id)->first();
        $user = \App\User::where('travelID', $id)->count('email');

        return view('travels', compact('travel'), ['user' => $user]);
    }
}
