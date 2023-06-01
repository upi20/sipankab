<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TahapanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tahapan')->delete();
        
        \DB::table('tahapan')->insert(array (
            0 => 
            array (
                'id' => '5',
            'nama' => 'Seleksi Tahap Awal (Administrasi)',
                'kode' => 'B1',
                'bobot' => '35',
                'import_id' => '2',
                'created_at' => '2023-06-01 15:30:32',
                'updated_at' => '2023-06-01 15:30:32',
            ),
            1 => 
            array (
                'id' => '6',
            'nama' => 'Seleksi Computer Assisted Test (Tahapan test tulis)',
                'kode' => 'B2',
                'bobot' => '35',
                'import_id' => '2',
                'created_at' => '2023-06-01 15:30:32',
                'updated_at' => '2023-06-01 15:30:32',
            ),
            2 => 
            array (
                'id' => '7',
            'nama' => 'Seleksi Test Wawancara (tahapan terakhir)',
                'kode' => 'B3',
                'bobot' => '30',
                'import_id' => '2',
                'created_at' => '2023-06-01 15:30:32',
                'updated_at' => '2023-06-01 15:30:32',
            ),
        ));
        
        
    }
}