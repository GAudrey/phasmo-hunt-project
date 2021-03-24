<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TObjectives;
use App\Models\TFirstname;
use App\Models\TLastname;

class FormController extends Controller
{
    public function form(){

        $objectives = TObjectives::all();
        $firstnames = TFirstname::all();
        $lastnames = TLastname::all();

        return view('form')
            ->with(compact('objectives'))
            ->with(compact('firstnames'))
            ->with(compact('lastnames'));

    }

    public function results(Request $request){

        $objective1 = $request->input('opt_obj_1');
        $objective2 = $request->input('opt_obj_2');
        $objective3 = $request->input('opt_obj_3');
        $firstn = $request->input('firstname');
        $lastn = $request->input('lastname');
        $talk = $request->input('talk');

        return view('whiteboard')
            ->with(compact('objective1'))
            ->with(compact('objective2'))
            ->with(compact('objective3'))
            ->with(compact('firstn'))
            ->with(compact('lastn'))
            ->with(compact('talk'));
    }

}
