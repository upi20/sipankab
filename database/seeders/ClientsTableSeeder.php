<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Shopeify',
                'foto' => '20230504180406.png',
                'status' => 1,
                'created_at' => '2023-05-04 17:57:30',
                'updated_at' => '2023-05-04 18:04:06',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Airbnb',
                'foto' => '20230504175745.png',
                'status' => 1,
                'created_at' => '2023-05-04 17:57:45',
                'updated_at' => '2023-05-04 17:57:45',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Amazon',
                'foto' => '20230504180413.png',
                'status' => 1,
                'created_at' => '2023-05-04 17:57:54',
                'updated_at' => '2023-05-04 18:04:13',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Google',
                'foto' => '20230504175804.png',
                'status' => 1,
                'created_at' => '2023-05-04 17:58:04',
                'updated_at' => '2023-05-04 17:58:04',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'Paypal',
                'foto' => '20230504175830.png',
                'status' => 1,
                'created_at' => '2023-05-04 17:58:30',
                'updated_at' => '2023-05-04 17:58:30',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Slack',
                'foto' => '20230504180426.png',
                'status' => 1,
                'created_at' => '2023-05-04 17:58:41',
                'updated_at' => '2023-05-04 18:04:26',
            ),
        ));
        
        
    }
}