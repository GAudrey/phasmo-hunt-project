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

}
