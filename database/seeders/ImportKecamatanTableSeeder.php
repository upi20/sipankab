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
                'id' => '1',
                'nama' => 'Kecamatan Di Ciamis sesuai dengan data kemendagri',
                'slug' => 'kecamatan-di-ciamis-sesuai-dengan-data-kemendagri',
                'file' => '20230531042949-kecamatan-di-ciamis-sesuai-dengan-data-kemendagri.xlsx',
                'count' => '27',
                'created_at' => '2023-05-31 16:29:49',
                'updated_at' => '2023-05-31 16:29:49',
            ),
        ));
        
        
    }
}