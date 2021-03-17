<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TObjectivesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('t_objectives')->delete();
        
        \DB::table('t_objectives')->insert(array (
            0 => 
            array (
                'id_objective' => 1,
                'objective' => 'Find evidence of paranormal activity with an EMF Reader',
            ),
            1 => 
            array (
                'id_objective' => 2,
                'objective' => 'Detect a room below 10° Celsius/50° Fahrenheit with a Thermometer',
            ),
            2 => 
            array (
                'id_objective' => 3,
                'objective' => 'Capture a photo of dirty water in a sink',
            ),
            3 => 
            array (
                'id_objective' => 4,
                'objective' => 'Capture a photo of the ghost',
            ),
            4 => 
            array (
                'id_objective' => 5,
                'objective' => 'Detect a ghost\'s presence with a Motion Sensor',
            ),
            5 => 
            array (
                'id_objective' => 6,
                'objective' => 'Prevent the ghost from hunting with a Crucifix',
            ),
            6 => 
            array (
                'id_objective' => 7,
                'objective' => 'Have a member of your team witness a Ghost event',
            ),
            7 => 
            array (
                'id_objective' => 8,
                'objective' => 'Cleanse the area near the ghost using Smudge Sticks',
            ),
            8 => 
            array (
                'id_objective' => 9,
                'objective' => 'Get a Ghost to walk through Salt',
            ),
        ));
        
        
    }
}