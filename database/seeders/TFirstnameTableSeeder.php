<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TFirstnameTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('t_firstname')->delete();
        
        \DB::table('t_firstname')->insert(array (
            0 => 
            array (
                'id_firstname' => 1,
                'firstname' => 'Barbara',
                'sexe' => 'F',
            ),
            1 => 
            array (
                'id_firstname' => 3,
                'firstname' => 'Betty',
                'sexe' => 'F',
            ),
            2 => 
            array (
                'id_firstname' => 4,
                'firstname' => 'Carol',
                'sexe' => 'F',
            ),
            3 => 
            array (
                'id_firstname' => 5,
                'firstname' => 'Donna',
                'sexe' => 'F',
            ),
            4 => 
            array (
                'id_firstname' => 6,
                'firstname' => 'Dorothy',
                'sexe' => 'F',
            ),
            5 => 
            array (
                'id_firstname' => 7,
                'firstname' => 'Elizabeth',
                'sexe' => 'F',
            ),
            6 => 
            array (
                'id_firstname' => 8,
                'firstname' => 'Helen',
                'sexe' => 'F',
            ),
            7 => 
            array (
                'id_firstname' => 9,
                'firstname' => 'Jennifer',
                'sexe' => 'F',
            ),
            8 => 
            array (
                'id_firstname' => 10,
                'firstname' => 'Karen',
                'sexe' => 'F',
            ),
            9 => 
            array (
                'id_firstname' => 11,
                'firstname' => 'Linda',
                'sexe' => 'F',
            ),
            10 => 
            array (
                'id_firstname' => 12,
                'firstname' => 'Lisa',
                'sexe' => 'F',
            ),
            11 => 
            array (
                'id_firstname' => 13,
                'firstname' => 'Margaret',
                'sexe' => 'F',
            ),
            12 => 
            array (
                'id_firstname' => 14,
                'firstname' => 'Maria',
                'sexe' => 'F',
            ),
            13 => 
            array (
                'id_firstname' => 15,
                'firstname' => 'Mary',
                'sexe' => 'F',
            ),
            14 => 
            array (
                'id_firstname' => 16,
                'firstname' => 'Nancy',
                'sexe' => 'F',
            ),
            15 => 
            array (
                'id_firstname' => 17,
                'firstname' => 'Patricia',
                'sexe' => 'F',
            ),
            16 => 
            array (
                'id_firstname' => 18,
                'firstname' => 'Ruth',
                'sexe' => 'F',
            ),
            17 => 
            array (
                'id_firstname' => 19,
                'firstname' => 'Sandra',
                'sexe' => 'F',
            ),
            18 => 
            array (
                'id_firstname' => 20,
                'firstname' => 'Susan',
                'sexe' => 'F',
            ),
            19 => 
            array (
                'id_firstname' => 21,
                'firstname' => 'Charles',
                'sexe' => 'M',
            ),
            20 => 
            array (
                'id_firstname' => 22,
                'firstname' => 'Christopher',
                'sexe' => 'M',
            ),
            21 => 
            array (
                'id_firstname' => 23,
                'firstname' => 'Daniel',
                'sexe' => 'M',
            ),
            22 => 
            array (
                'id_firstname' => 24,
                'firstname' => 'David',
                'sexe' => 'M',
            ),
            23 => 
            array (
                'id_firstname' => 25,
                'firstname' => 'Donald',
                'sexe' => 'M',
            ),
            24 => 
            array (
                'id_firstname' => 26,
                'firstname' => 'George',
                'sexe' => 'M',
            ),
            25 => 
            array (
                'id_firstname' => 27,
                'firstname' => 'James',
                'sexe' => 'M',
            ),
            26 => 
            array (
                'id_firstname' => 28,
                'firstname' => 'John',
                'sexe' => 'M',
            ),
            27 => 
            array (
                'id_firstname' => 29,
                'firstname' => 'Joseph',
                'sexe' => 'M',
            ),
            28 => 
            array (
                'id_firstname' => 30,
                'firstname' => 'Kenneth',
                'sexe' => 'M',
            ),
            29 => 
            array (
                'id_firstname' => 31,
                'firstname' => 'Mark',
                'sexe' => 'M',
            ),
            30 => 
            array (
                'id_firstname' => 32,
                'firstname' => 'Michael',
                'sexe' => 'M',
            ),
            31 => 
            array (
                'id_firstname' => 33,
                'firstname' => 'Paul',
                'sexe' => 'M',
            ),
            32 => 
            array (
                'id_firstname' => 34,
                'firstname' => 'Richard',
                'sexe' => 'M',
            ),
            33 => 
            array (
                'id_firstname' => 35,
                'firstname' => 'Robert',
                'sexe' => 'M',
            ),
            34 => 
            array (
                'id_firstname' => 36,
                'firstname' => 'Steven',
                'sexe' => 'M',
            ),
            35 => 
            array (
                'id_firstname' => 37,
                'firstname' => 'Thomas',
                'sexe' => 'M',
            ),
            36 => 
            array (
                'id_firstname' => 38,
                'firstname' => 'William',
                'sexe' => 'M',
            ),
        ));
        
        
    }
}