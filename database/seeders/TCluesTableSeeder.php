<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TCluesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('t_clues')->delete();
        
        \DB::table('t_clues')->insert(array (
            0 => 
            array (
                'id_clue' => 1,
                'clues' => 'Freezing temperature',
            ),
            1 => 
            array (
                'id_clue' => 2,
                'clues' => 'EMF 5',
            ),
            2 => 
            array (
                'id_clue' => 3,
                'clues' => 'Ghost writing',
            ),
            3 => 
            array (
                'id_clue' => 4,
                'clues' => 'Orb',
            ),
            4 => 
            array (
                'id_clue' => 5,
                'clues' => 'Spirit box',
            ),
            5 => 
            array (
                'id_clue' => 6,
                'clues' => 'Fingerprint',
            ),
        ));
        
        
    }
}