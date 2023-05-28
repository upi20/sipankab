<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GaleriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galeri')->delete();
        
        \DB::table('galeri')->insert(array (
            0 => 
            array (
                'id' => 13,
                'nama' => 'Kegiatan Mengaji',
                'foto' => NULL,
                'foto_id_gdrive' => 'Ar-Rahman',
                'id_gdrive' => 'Ar-Rahman',
                'slug' => 'kegiatan-mengaji',
                'tanggal' => '2023-04-01',
                'lokasi' => 'Kp. Tanjungmukti',
                'keterangan' => 'Murojaah',
                'status' => 1,
                'created_at' => '2023-04-01 21:32:38',
                'updated_at' => '2023-04-01 21:32:38',
            ),
        ));
        
        
    }
}