<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TGhostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('t_ghosts')->delete();
        
        \DB::table('t_ghosts')->insert(array (
            0 => 
            array (
                'id_ghost' => 1,
                'types' => 'Spirit',
                'strength' => 'None',
                'weakness' => 'Smudge stick',
            ),
            1 => 
            array (
                'id_ghost' => 2,
                'types' => 'Wraith',
                'strength' => 'Doesn\'t touch the ground',
                'weakness' => 'Salt',
            ),
            2 => 
            array (
                'id_ghost' => 3,
                'types' => 'Phantom',
                'strength' => 'Sanity drops when look at it',
                'weakness' => 'Disappears when a picture is taken',
            ),
            3 => 
            array (
                'id_ghost' => 4,
                'types' => 'Poltergeist',
                'strength' => 'Throws multiple objects',
                'weakness' => 'Empty room',
            ),
            4 => 
            array (
                'id_ghost' => 5,
                'types' => 'Banshee',
                'strength' => 'Only one target at a time',
                'weakness' => 'Crucifix',
            ),
            5 => 
            array (
                'id_ghost' => 6,
                'types' => 'Jinn',
                'strength' => 'Move faster when light is on',
                'weakness' => 'Turning the power off limits his ability',
            ),
            6 => 
            array (
                'id_ghost' => 7,
                'types' => 'Mare',
                'strength' => 'Darkness is is friend',
                'weakness' => 'Turning on the light',
            ),
            7 => 
            array (
                'id_ghost' => 8,
                'types' => 'Revenant',
                'strength' => 'Hunt fast',
                'weakness' => 'Hiding slow him',
            ),
            8 => 
            array (
                'id_ghost' => 9,
                'types' => 'Shade',
                'strength' => 'Shy, hard to find',
                'weakness' => 'Doesn\'t hunt when multiple people',
            ),
            9 => 
            array (
                'id_ghost' => 10,
                'types' => 'Demon',
                'strength' => 'Attack more',
                'weakness' => 'Sanity doesn\'t drop with Ouija board',
            ),
            10 => 
            array (
                'id_ghost' => 11,
                'types' => 'Yurei',
                'strength' => 'Sanity drops faster',
                'weakness' => 'Smudge the room',
            ),
            11 => 
            array (
                'id_ghost' => 12,
                'types' => 'Oni',
                'strength' => 'More active than most',
                'weakness' => 'Fast identification',
            ),
        ));
        
        
    }
}