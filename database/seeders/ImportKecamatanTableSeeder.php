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
                'id' => 14,
                'nama' => 'Kecamatan sesuai data kemendagri',
                'slug' => 'kecamatan-sesuai-data-kemendagri',
                'file' => '20230516050421-kecamatan-sesuai-data-kemendagri.xlsx',
                'count' => 27,
                'created_at' => '2023-05-16 17:04:21',
                'updated_at' => '2023-05-16 17:05:13',
            ),
        ));
        
        
    }
}