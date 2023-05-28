<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpkSawAlternatifNilaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('spk_saw_alternatif_nilai')->delete();
        
        \DB::table('spk_saw_alternatif_nilai')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kriteria_id' => 1,
                'alternatif_id' => 14,
                'nilai' => 100.0,
                'created_at' => '2023-05-13 03:30:30',
                'updated_at' => '2023-05-13 03:30:30',
            ),
            1 => 
            array (
                'id' => 2,
                'kriteria_id' => 2,
                'alternatif_id' => 14,
                'nilai' => 28.4,
                'created_at' => '2023-05-13 03:30:30',
                'updated_at' => '2023-05-13 03:30:30',
            ),
            2 => 
            array (
                'id' => 3,
                'kriteria_id' => 3,
                'alternatif_id' => 14,
                'nilai' => 50.4,
                'created_at' => '2023-05-13 03:30:30',
                'updated_at' => '2023-05-13 03:30:30',
            ),
            3 => 
            array (
                'id' => 4,
                'kriteria_id' => 1,
                'alternatif_id' => 15,
                'nilai' => 93.0,
                'created_at' => '2023-05-13 03:31:41',
                'updated_at' => '2023-05-13 03:31:41',
            ),
            4 => 
            array (
                'id' => 5,
                'kriteria_id' => 2,
                'alternatif_id' => 15,
                'nilai' => 28.0,
                'created_at' => '2023-05-13 03:31:41',
                'updated_at' => '2023-05-13 03:31:41',
            ),
            5 => 
            array (
                'id' => 6,
                'kriteria_id' => 3,
                'alternatif_id' => 15,
                'nilai' => 43.63,
                'created_at' => '2023-05-13 03:31:41',
                'updated_at' => '2023-05-13 03:31:41',
            ),
            6 => 
            array (
                'id' => 10,
                'kriteria_id' => 1,
                'alternatif_id' => 17,
                'nilai' => 95.0,
                'created_at' => '2023-05-13 03:32:22',
                'updated_at' => '2023-05-13 03:32:22',
            ),
            7 => 
            array (
                'id' => 11,
                'kriteria_id' => 2,
                'alternatif_id' => 17,
                'nilai' => 26.8,
                'created_at' => '2023-05-13 03:32:22',
                'updated_at' => '2023-05-13 03:32:22',
            ),
            8 => 
            array (
                'id' => 12,
                'kriteria_id' => 3,
                'alternatif_id' => 17,
                'nilai' => 44.93,
                'created_at' => '2023-05-13 03:32:22',
                'updated_at' => '2023-05-13 03:32:22',
            ),
            9 => 
            array (
                'id' => 13,
                'kriteria_id' => 1,
                'alternatif_id' => 18,
                'nilai' => 97.5,
                'created_at' => '2023-05-13 03:32:39',
                'updated_at' => '2023-05-13 03:32:39',
            ),
            10 => 
            array (
                'id' => 14,
                'kriteria_id' => 2,
                'alternatif_id' => 18,
                'nilai' => 26.0,
                'created_at' => '2023-05-13 03:32:39',
                'updated_at' => '2023-05-13 03:32:39',
            ),
            11 => 
            array (
                'id' => 15,
                'kriteria_id' => 3,
                'alternatif_id' => 18,
                'nilai' => 46.73,
                'created_at' => '2023-05-13 03:32:39',
                'updated_at' => '2023-05-13 03:32:39',
            ),
            12 => 
            array (
                'id' => 16,
                'kriteria_id' => 1,
                'alternatif_id' => 19,
                'nilai' => 97.0,
                'created_at' => '2023-05-13 03:33:00',
                'updated_at' => '2023-05-13 03:33:00',
            ),
            13 => 
            array (
                'id' => 17,
                'kriteria_id' => 2,
                'alternatif_id' => 19,
                'nilai' => 25.2,
                'created_at' => '2023-05-13 03:33:00',
                'updated_at' => '2023-05-13 03:33:00',
            ),
            14 => 
            array (
                'id' => 18,
                'kriteria_id' => 3,
                'alternatif_id' => 19,
                'nilai' => 46.56,
                'created_at' => '2023-05-13 03:33:00',
                'updated_at' => '2023-05-13 03:33:00',
            ),
            15 => 
            array (
                'id' => 29,
                'kriteria_id' => 1,
                'alternatif_id' => 16,
                'nilai' => 98.25,
                'created_at' => '2023-05-13 04:49:41',
                'updated_at' => '2023-05-13 04:49:41',
            ),
            16 => 
            array (
                'id' => 30,
                'kriteria_id' => 2,
                'alternatif_id' => 16,
                'nilai' => 26.8,
                'created_at' => '2023-05-13 04:49:41',
                'updated_at' => '2023-05-13 04:49:41',
            ),
            17 => 
            array (
                'id' => 31,
                'kriteria_id' => 3,
                'alternatif_id' => 16,
                'nilai' => 44.93,
                'created_at' => '2023-05-13 04:49:41',
                'updated_at' => '2023-05-13 04:49:41',
            ),
        ));
        
        
    }
}