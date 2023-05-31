<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportCalonTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_calon')->delete();
        
        \DB::table('import_calon')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Calon Testing',
                'slug' => 'calon-testing',
                'file' => '20230531045244-calon-testing.xlsx',
                'count' => 270,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:50',
            ),
        ));
        
        
    }
}