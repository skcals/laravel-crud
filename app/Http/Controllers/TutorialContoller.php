<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class TutorialContoller extends Controller
{
    public function index()
    {
        $tutorials = Tutorial::latest()->paginate(10);

        return view('tutorials.index', compact('tutorials'));
    }

    public function create()
    {
        $tutorial = new Tutorial();

        return view('tutorials.create', compact('tutorial'));
    }

    public function store(Request $request)
    {
        Tutorial::create($this->validateRequest());

        return redirect()->route('tutorials.index')->with('message', 'Tutorial Added successfully.');
    }

    public function show(Tutorial $tutorial)
    {
        return view('tutorials.show', compact('tutorial'));
    }

    public function edit(Tutorial $tutorial)
    {
        return view('tutorials.edit', compact('tutorial'));
    }

    public function update(Request $request, Tutorial $tutorial)
    {

        $tutorial->update($this->validateRequest());

        return redirect()->intended('/tutorials')->with('message', 'Tutorial updated successfully.');
    }

    public function destroy(Tutorial $tutorial)
    {
        $tutorial->delete();

        return redirect()->route('tutorials.index')->with('message', 'Tutorial deleted successfully');
    }


    // Validate Request 
    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required|min:20',
            'tags' => 'required',
            'price' => 'required',
            'level' => 'required'
        ]);
    }
}
