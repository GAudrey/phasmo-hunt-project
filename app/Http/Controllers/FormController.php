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
            ->with(compact('objectives', 'firstnames', 'lastnames'));

    }

    public function results(Request $request){

        $idObjective1 = $request->input('opt_obj_1');
        $objective1 = TObjectives::where('id_objective', $idObjective1)->value('objective');
        $idObjective2 = $request->input('opt_obj_2');
        $objective2 = TObjectives::where('id_objective', $idObjective2)->value('objective');
        $idObjective3 = $request->input('opt_obj_3');
        $objective3 = TObjectives::where('id_objective', $idObjective3)->value('objective');
        $idFirstn = $request->input('firstname');
        $firstn = TFirstname::where('id_firstname', $idFirstn)->value('firstname');
        $idLastn = $request->input('lastname');
        $lastn = TLastname::where('id_lastname', $idLastn)->value('lastname');
        $talk = $request->input('talk');

        return view('whiteboard')
            ->with(compact('objective1', 'objective2', 'objective3', 'firstn', 'lastn', 'talk'));

    }

}
