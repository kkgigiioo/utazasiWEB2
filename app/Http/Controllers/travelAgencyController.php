<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = \App\User::where('travels_id', $id)->count('id');

        return view('travels', compact('travel'), ['user' => $user]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate
        ([
        'country' => 'required|min:3',
        'city' => 'required|min:3',
        'content' => 'required|max:150',
        'description' => 'required|max:250',
        'date' => 'required',
        'price' => 'required',
        'maxNumber' => 'required'
        ]);

        $travel = new \App\Travels();
        $travel->country = $request->get('country');
        $travel->city = $request->get('city');
        $travel->content = $request->get('content');
        $travel->description = $request->get('description');
        $travel->startDate = $request->get('date');
        $travel->price = $request->get('price');
        $travel->maxNum = $request->get('maxNumber');
        $travel->created_at = NOW();
        $travel->updated_at = NOW();

        $travel->save();

        return redirect('/');
    }

    public function showNewTravel()
    {
        return view('new');
    }

    public function saveTravel($id)
    {
        $travel = \App\Travels::findOrFail($id);
        $user = Auth::user();

        $user['travels_id'] = $travel->id;

        $user->save();
            
        return back();
    }
}
