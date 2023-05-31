<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_menu')->delete();
        
        \DB::table('p_role_has_menu')->insert(array (
            0 => 
            array (
                'id' => 155,
                'role_id' => 1,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            1 => 
            array (
                'id' => 258,
                'role_id' => 1,
                'menu_id' => 430,
                'created_at' => '2023-05-16 18:10:19',
                'updated_at' => '2023-05-16 18:10:19',
            ),
            2 => 
            array (
                'id' => 285,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2023-05-23 21:06:14',
                'updated_at' => '2023-05-23 21:06:14',
            ),
            3 => 
            array (
                'id' => 298,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2023-05-29 15:15:08',
                'updated_at' => '2023-05-29 15:15:08',
            ),
            4 => 
            array (
                'id' => 299,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2023-05-29 15:15:25',
                'updated_at' => '2023-05-29 15:15:25',
            ),
            5 => 
            array (
                'id' => 300,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2023-05-29 15:15:33',
                'updated_at' => '2023-05-29 15:15:33',
            ),
            6 => 
            array (
                'id' => 301,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2023-05-29 15:15:40',
                'updated_at' => '2023-05-29 15:15:40',
            ),
            7 => 
            array (
                'id' => 306,
                'role_id' => 1,
                'menu_id' => 438,
                'created_at' => '2023-05-29 20:03:50',
                'updated_at' => '2023-05-29 20:03:50',
            ),
            8 => 
            array (
                'id' => 307,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2023-05-30 02:11:23',
                'updated_at' => '2023-05-30 02:11:23',
            ),
            9 => 
            array (
                'id' => 314,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2023-05-30 02:20:34',
                'updated_at' => '2023-05-30 02:20:34',
            ),
            10 => 
            array (
                'id' => 317,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2023-05-30 02:20:42',
                'updated_at' => '2023-05-30 02:20:42',
            ),
            11 => 
            array (
                'id' => 320,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2023-05-30 02:20:47',
                'updated_at' => '2023-05-30 02:20:47',
            ),
            12 => 
            array (
                'id' => 323,
                'role_id' => 1,
                'menu_id' => 411,
                'created_at' => '2023-05-30 02:20:52',
                'updated_at' => '2023-05-30 02:20:52',
            ),
            13 => 
            array (
                'id' => 326,
                'role_id' => 1,
                'menu_id' => 439,
                'created_at' => '2023-05-31 16:27:10',
                'updated_at' => '2023-05-31 16:27:10',
            ),
            14 => 
            array (
                'id' => 327,
                'role_id' => 1,
                'menu_id' => 440,
                'created_at' => '2023-05-31 16:27:42',
                'updated_at' => '2023-05-31 16:27:42',
            ),
            15 => 
            array (
                'id' => 328,
                'role_id' => 1,
                'menu_id' => 441,
                'created_at' => '2023-05-31 16:28:12',
                'updated_at' => '2023-05-31 16:28:12',
            ),
            16 => 
            array (
                'id' => 329,
                'role_id' => 1,
                'menu_id' => 442,
                'created_at' => '2023-05-31 16:51:02',
                'updated_at' => '2023-05-31 16:51:02',
            ),
            17 => 
            array (
                'id' => 330,
                'role_id' => 1,
                'menu_id' => 443,
                'created_at' => '2023-05-31 16:51:20',
                'updated_at' => '2023-05-31 16:51:20',
            ),
            18 => 
            array (
                'id' => 331,
                'role_id' => 1,
                'menu_id' => 444,
                'created_at' => '2023-05-31 16:53:25',
                'updated_at' => '2023-05-31 16:53:25',
            ),
            19 => 
            array (
                'id' => 332,
                'role_id' => 1,
                'menu_id' => 445,
                'created_at' => '2023-05-31 16:53:42',
                'updated_at' => '2023-05-31 16:53:42',
            ),
        ));
        
        
    }
}