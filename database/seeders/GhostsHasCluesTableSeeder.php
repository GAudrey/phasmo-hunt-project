<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GhostsHasCluesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ghosts_has_clues')->delete();
        
        \DB::table('ghosts_has_clues')->insert(array (
            0 => 
            array (
                'id_ghs' => 1,
                'fk_id_ghosts' => 1,
                'fk_id_clues' => 5,
            ),
            1 => 
            array (
                'id_ghs' => 2,
                'fk_id_ghosts' => 1,
                'fk_id_clues' => 6,
            ),
            2 => 
            array (
                'id_ghs' => 3,
                'fk_id_ghosts' => 1,
                'fk_id_clues' => 3,
            ),
            3 => 
            array (
                'id_ghs' => 4,
                'fk_id_ghosts' => 2,
                'fk_id_clues' => 6,
            ),
            4 => 
            array (
                'id_ghs' => 5,
                'fk_id_ghosts' => 2,
                'fk_id_clues' => 1,
            ),
            5 => 
            array (
                'id_ghs' => 6,
                'fk_id_ghosts' => 2,
                'fk_id_clues' => 5,
            ),
            6 => 
            array (
                'id_ghs' => 7,
                'fk_id_ghosts' => 3,
                'fk_id_clues' => 2,
            ),
            7 => 
            array (
                'id_ghs' => 8,
                'fk_id_ghosts' => 3,
                'fk_id_clues' => 4,
            ),
            8 => 
            array (
                'id_ghs' => 9,
                'fk_id_ghosts' => 3,
                'fk_id_clues' => 1,
            ),
            9 => 
            array (
                'id_ghs' => 10,
                'fk_id_ghosts' => 4,
                'fk_id_clues' => 5,
            ),
            10 => 
            array (
                'id_ghs' => 11,
                'fk_id_ghosts' => 4,
                'fk_id_clues' => 6,
            ),
            11 => 
            array (
                'id_ghs' => 12,
                'fk_id_ghosts' => 4,
                'fk_id_clues' => 4,
            ),
            12 => 
            array (
                'id_ghs' => 13,
                'fk_id_ghosts' => 5,
                'fk_id_clues' => 2,
            ),
            13 => 
            array (
                'id_ghs' => 14,
                'fk_id_ghosts' => 5,
                'fk_id_clues' => 6,
            ),
            14 => 
            array (
                'id_ghs' => 15,
                'fk_id_ghosts' => 5,
                'fk_id_clues' => 1,
            ),
            15 => 
            array (
                'id_ghs' => 16,
                'fk_id_ghosts' => 6,
                'fk_id_clues' => 5,
            ),
            16 => 
            array (
                'id_ghs' => 17,
                'fk_id_ghosts' => 6,
                'fk_id_clues' => 4,
            ),
            17 => 
            array (
                'id_ghs' => 18,
                'fk_id_ghosts' => 6,
                'fk_id_clues' => 2,
            ),
            18 => 
            array (
                'id_ghs' => 19,
                'fk_id_ghosts' => 7,
                'fk_id_clues' => 5,
            ),
            19 => 
            array (
                'id_ghs' => 20,
                'fk_id_ghosts' => 7,
                'fk_id_clues' => 4,
            ),
            20 => 
            array (
                'id_ghs' => 21,
                'fk_id_ghosts' => 7,
                'fk_id_clues' => 1,
            ),
            21 => 
            array (
                'id_ghs' => 22,
                'fk_id_ghosts' => 8,
                'fk_id_clues' => 2,
            ),
            22 => 
            array (
                'id_ghs' => 23,
                'fk_id_ghosts' => 8,
                'fk_id_clues' => 6,
            ),
            23 => 
            array (
                'id_ghs' => 24,
                'fk_id_ghosts' => 8,
                'fk_id_clues' => 3,
            ),
            24 => 
            array (
                'id_ghs' => 25,
                'fk_id_ghosts' => 9,
                'fk_id_clues' => 2,
            ),
            25 => 
            array (
                'id_ghs' => 26,
                'fk_id_ghosts' => 9,
                'fk_id_clues' => 4,
            ),
            26 => 
            array (
                'id_ghs' => 27,
                'fk_id_ghosts' => 9,
                'fk_id_clues' => 3,
            ),
            27 => 
            array (
                'id_ghs' => 28,
                'fk_id_ghosts' => 10,
                'fk_id_clues' => 5,
            ),
            28 => 
            array (
                'id_ghs' => 29,
                'fk_id_ghosts' => 10,
                'fk_id_clues' => 3,
            ),
            29 => 
            array (
                'id_ghs' => 30,
                'fk_id_ghosts' => 10,
                'fk_id_clues' => 1,
            ),
            30 => 
            array (
                'id_ghs' => 31,
                'fk_id_ghosts' => 11,
                'fk_id_clues' => 4,
            ),
            31 => 
            array (
                'id_ghs' => 32,
                'fk_id_ghosts' => 11,
                'fk_id_clues' => 3,
            ),
            32 => 
            array (
                'id_ghs' => 33,
                'fk_id_ghosts' => 11,
                'fk_id_clues' => 1,
            ),
            33 => 
            array (
                'id_ghs' => 34,
                'fk_id_ghosts' => 12,
                'fk_id_clues' => 2,
            ),
            34 => 
            array (
                'id_ghs' => 35,
                'fk_id_ghosts' => 12,
                'fk_id_clues' => 5,
            ),
            35 => 
            array (
                'id_ghs' => 36,
                'fk_id_ghosts' => 12,
                'fk_id_clues' => 3,
            ),
        ));
        
        
    }
}