<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Iklan 1',
                'foto' => '20230324234121.png',
                'status' => 0,
                'ditampilkan' => 4,
                'created_at' => '2023-03-24 23:41:21',
                'updated_at' => '2023-03-25 00:24:09',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Iklan 2',
                'foto' => '20230324234515.jpg',
                'status' => 0,
                'ditampilkan' => 6,
                'created_at' => '2023-03-24 23:45:15',
                'updated_at' => '2023-03-25 00:24:17',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Iklan 3',
                'foto' => '20230324234525.jpg',
                'status' => 1,
                'ditampilkan' => 1146,
                'created_at' => '2023-03-24 23:45:25',
                'updated_at' => '2023-05-12 23:43:43',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'Iklan 4',
                'foto' => '20230324234534.jpg',
                'status' => 1,
                'ditampilkan' => 1122,
                'created_at' => '2023-03-24 23:45:34',
                'updated_at' => '2023-05-12 23:37:45',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'Iklan 5',
                'foto' => '20230324234545.jpg',
                'status' => 1,
                'ditampilkan' => 1127,
                'created_at' => '2023-03-24 23:45:45',
                'updated_at' => '2023-05-12 23:26:56',
            ),
        ));
        
        
    }
}