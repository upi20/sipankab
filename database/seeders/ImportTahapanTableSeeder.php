<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportTahapanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_tahapan')->delete();
        
        \DB::table('import_tahapan')->insert(array (
            0 => 
            array (
                'id' => '2',
                'nama' => 'Tahapan sesuai dengan di skripsi',
                'slug' => 'tahapan-sesuai-dengan-di-skripsi',
                'file' => '20230601033032-tahapan-sesuai-dengan-di-skripsi.xlsx',
                'count' => '3',
                'created_at' => '2023-06-01 15:30:32',
                'updated_at' => '2023-06-01 15:30:32',
            ),
        ));
        
        
    }
}