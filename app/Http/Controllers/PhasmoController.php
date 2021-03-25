<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TObjectives;
use App\Models\TFirstname;
use App\Models\TLastname;
use App\Models\TGhosts;
use App\Models\TClues;
use App\Models\GhostsHasClues;

class PhasmoController extends Controller
{
    public function form(){

        //FOR VIEW FORM -> recovers all objectives, first names and last names
        $objectives = TObjectives::all();
        $firstnames = TFirstname::all();
        $lastnames = TLastname::all();

        return view('form')
            ->with(compact('objectives', 'firstnames', 'lastnames'));

    }

    public function hunt(Request $request){

        //FOR SECTION WHITEBOARD -> recovers the form values (an id) then column content for the id
            //OBJECTIVE 1
        $idObjective1 = $request->input('opt_obj_1');//value is an id
        $objective1 = TObjectives::where('id_objective', $idObjective1)->value('objective');//content for the id
            //OBJECTIVE 2
        $idObjective2 = $request->input('opt_obj_2');
        $objective2 = TObjectives::where('id_objective', $idObjective2)->value('objective');
            //OBJECTIVE 3
        $idObjective3 = $request->input('opt_obj_3');
        $objective3 = TObjectives::where('id_objective', $idObjective3)->value('objective');
            //FIRST NAME
        $idFirstn = $request->input('firstname');
        $firstn = TFirstname::where('id_firstname', $idFirstn)->value('firstname');
            //LAST NAME
        $idLastn = $request->input('lastname');
        $lastn = TLastname::where('id_lastname', $idLastn)->value('lastname');
            //RESPOND TO
        $talk = $request->input('talk');

        //FOR SECTION JOURNAL -> recovers all clues and ghosts
        $ghosts = TGhosts::all();
        $clues = TClues::all();

        return view('hunt')
            ->with(compact('objective1', 'objective2', 'objective3', 'firstn', 'lastn', 'talk', 'ghosts', 'clues'));

    }

}
