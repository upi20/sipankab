<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportKecamatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_kecamatan')->delete();
        
        \DB::table('import_kecamatan')->insert(array (
            0 => 
            array (
                'id' => '2',
                'nama' => 'Data Kecamatan Ciamis Sesuai Dengan Data kemendagri',
                'slug' => 'data-kecamatan-ciamis-sesuai-dengan-data-kemendagri',
                'file' => '20230601032838-data-kecamatan-ciamis-sesuai-dengan-data-kemendagri.xlsx',
                'count' => '27',
                'created_at' => '2023-06-01 15:28:38',
                'updated_at' => '2023-06-01 15:28:38',
            ),
        ));
        
        
    }
}