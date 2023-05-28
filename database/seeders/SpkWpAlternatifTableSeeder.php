<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpkWpAlternatifTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('spk_wp_alternatif')->delete();
        
        \DB::table('spk_wp_alternatif')->insert(array (
            0 => 
            array (
                'id' => 14,
                'spk_id' => 1,
                'nama' => 'Didin Abidin',
                'created_at' => '2023-05-13 03:30:30',
                'updated_at' => '2023-05-13 03:30:30',
            ),
            1 => 
            array (
                'id' => 15,
                'spk_id' => 1,
                'nama' => 'Taufiq Firdaus',
                'created_at' => '2023-05-13 03:31:41',
                'updated_at' => '2023-05-13 03:31:41',
            ),
            2 => 
            array (
                'id' => 16,
                'spk_id' => 1,
                'nama' => 'Anggia Dwi Nugrahman',
                'created_at' => '2023-05-13 03:32:04',
                'updated_at' => '2023-05-13 03:32:04',
            ),
            3 => 
            array (
                'id' => 17,
                'spk_id' => 1,
                'nama' => 'Dawud',
                'created_at' => '2023-05-13 03:32:22',
                'updated_at' => '2023-05-13 03:32:22',
            ),
            4 => 
            array (
                'id' => 18,
                'spk_id' => 1,
                'nama' => 'Asep Herdiana',
                'created_at' => '2023-05-13 03:32:39',
                'updated_at' => '2023-05-13 03:32:39',
            ),
            5 => 
            array (
                'id' => 19,
                'spk_id' => 1,
                'nama' => 'Pitri Wahyuni,S.P.,',
                'created_at' => '2023-05-13 03:33:00',
                'updated_at' => '2023-05-13 03:33:00',
            ),
        ));
        
        
    }
}