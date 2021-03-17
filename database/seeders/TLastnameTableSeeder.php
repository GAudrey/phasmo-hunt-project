<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TLastnameTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('t_lastname')->delete();
        
        \DB::table('t_lastname')->insert(array (
            0 => 
            array (
                'id_lastname' => 1,
                'lastname' => 'Anderson',
            ),
            1 => 
            array (
                'id_lastname' => 2,
                'lastname' => 'Brown',
            ),
            2 => 
            array (
                'id_lastname' => 3,
                'lastname' => 'Clark',
            ),
            3 => 
            array (
                'id_lastname' => 4,
                'lastname' => 'Davis',
            ),
            4 => 
            array (
                'id_lastname' => 5,
                'lastname' => 'Garcia',
            ),
            5 => 
            array (
                'id_lastname' => 6,
                'lastname' => 'Harris',
            ),
            6 => 
            array (
                'id_lastname' => 7,
                'lastname' => 'Jackson',
            ),
            7 => 
            array (
                'id_lastname' => 8,
                'lastname' => 'Johnson',
            ),
            8 => 
            array (
                'id_lastname' => 9,
                'lastname' => 'Jones',
            ),
            9 => 
            array (
                'id_lastname' => 10,
                'lastname' => 'Martin',
            ),
            10 => 
            array (
                'id_lastname' => 11,
                'lastname' => 'Martinez',
            ),
            11 => 
            array (
                'id_lastname' => 12,
                'lastname' => 'Miller',
            ),
            12 => 
            array (
                'id_lastname' => 13,
                'lastname' => 'Moore',
            ),
            13 => 
            array (
                'id_lastname' => 14,
                'lastname' => 'Robinson',
            ),
            14 => 
            array (
                'id_lastname' => 15,
                'lastname' => 'Smith',
            ),
            15 => 
            array (
                'id_lastname' => 16,
                'lastname' => 'Taylor',
            ),
            16 => 
            array (
                'id_lastname' => 17,
                'lastname' => 'Thomas',
            ),
            17 => 
            array (
                'id_lastname' => 18,
                'lastname' => 'Thompson',
            ),
            18 => 
            array (
                'id_lastname' => 19,
                'lastname' => 'Williams',
            ),
            19 => 
            array (
                'id_lastname' => 20,
                'lastname' => 'Wilson',
            ),
            20 => 
            array (
                'id_lastname' => 21,
                'lastname' => 'White',
            ),
        ));
        
        
    }
}