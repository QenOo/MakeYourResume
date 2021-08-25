<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resume extends Controller
{
    //

    public function getAllResume () {
        $resumes = \App\Models\Resume::all();
        return view('/cv/show-all', compact('resumes'));
    }

    public function singelResume ($id) {
        $resume = \App\Models\resume::find($id);
        return view('/cv/show-my-cv', compact('resume'));
    }

    public function store (Request $request) {

//        $validatedData = $request->validate([
//            'name' => 'required|max:255',
//            'job' => 'required|max:255',
//            'description' => 'required|max:255',
//            'fb' => 'required|max:255',
//            'tw' => 'required|max:255',
//            'git' => 'required|max:255',
//            'in' => 'required|max:255',
//            'exp' => 'required|max:255',
//            'edu' => 'required|max:255',
//            'work' => 'required|max:255',
//        ]);

//        $save = new Contact;
//
//        $save->name          = $request->name;
//        $save->job           = $request->job;
//        $save->description   = $request->description;
//        $save->fb            = $request->fb;
//        $save->tw            = $request->tw;
//        $save->git           = $request->git;
//        $save->in            = $request->in;
//        $save->exp           = $request->exp;
//        $save->edu           = $request->edu;
//        $save->work          = $request->work;

//        $emp->save();


        \App\Models\resume::create($request->all());


    }
}
