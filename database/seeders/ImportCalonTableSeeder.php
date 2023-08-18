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
                'id' => '35',
                'nama' => '6 besar',
                'slug' => '6-besar',
                'file' => '20230711021221-6-besar.xlsx',
                'count' => '161',
                'created_at' => '2023-07-11 14:12:21',
                'updated_at' => '2023-07-11 14:12:23',
            ),
        ));
        
        
    }
}