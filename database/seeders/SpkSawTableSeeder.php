<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpkSawTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('spk_saw')->delete();
        
        \DB::table('spk_saw')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Pendukung keputusan kelulusan pelatihan tahap 1',
                'slug' => 'pendukung-keputusan-kelulusan-pelatihan-tahap-1',
                'keterangan' => '<p><b>keterangan</b><p><img data-bs-filename="1681873855530_53.png" style="width: 744.375px;" src="/assets/spk/saw/16839172250.png"><br></p><p></p><p></p></p>
',
                'status' => 0,
                'created_at' => '2023-05-13 01:47:05',
                'updated_at' => '2023-05-13 03:04:37',
            ),
        ));
        
        
    }
}