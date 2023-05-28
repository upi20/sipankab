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
                'id' => 16,
                'nama' => 'Testing',
                'slug' => 'testing',
                'file' => '20230529031753-testing.xlsx',
                'count' => 270,
                'created_at' => '2023-05-29 03:17:53',
                'updated_at' => '2023-05-29 03:17:58',
            ),
        ));
        
        
    }
}