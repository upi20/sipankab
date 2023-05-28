<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpkWpKriteriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('spk_wp_kriteria')->delete();
        
        \DB::table('spk_wp_kriteria')->insert(array (
            0 => 
            array (
                'id' => 1,
                'spk_id' => 1,
            'nama' => 'Seleksi Tahap Awal  (Administrasi)',
                'kode' => 'B1',
                'bobot' => 35.0,
                'created_at' => '2023-05-13 02:55:05',
                'updated_at' => '2023-05-13 03:01:17',
            ),
            1 => 
            array (
                'id' => 2,
                'spk_id' => 1,
            'nama' => 'Seleksi Computer Assisted Test (Tahapan test tulis)',
                'kode' => 'B2',
                'bobot' => 35.0,
                'created_at' => '2023-05-13 02:56:27',
                'updated_at' => '2023-05-13 02:56:27',
            ),
            2 => 
            array (
                'id' => 3,
                'spk_id' => 1,
            'nama' => 'Seleksi  Test Wawancara (tahapan terakhir)',
                'kode' => 'B3',
                'bobot' => 30.0,
                'created_at' => '2023-05-13 02:57:14',
                'updated_at' => '2023-05-13 02:57:14',
            ),
        ));
        
        
    }
}