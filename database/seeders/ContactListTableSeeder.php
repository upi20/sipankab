<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactListTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_list')->delete();
        
        \DB::table('contact_list')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Lokasi Kami',
                'icon' => 'fas fa-map-marker-alt',
                'url' => 'https://goo.gl/maps/4BzFsW5mQtY8Zywr7',
                'order' => 1,
                'keterangan' => 'Kp. Tanjungmukti, Girimukti, Pasirkuda, Cianjur',
                'status' => 1,
                'created_at' => '2022-08-21 08:34:56',
                'updated_at' => '2023-03-27 06:10:59',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Telepon',
                'icon' => 'fas fa-phone',
                'url' => 'tel:+6281322608453',
                'order' => 2,
                'keterangan' => '+6281322608453',
                'status' => 1,
                'created_at' => '2022-08-21 08:35:23',
                'updated_at' => '2023-03-27 06:11:15',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Email',
                'icon' => 'fas fa-envelope',
                'url' => 'mailto:admin@arrahman.iseplutpi.site',
                'order' => 3,
                'keterangan' => 'admin@arrahman.iseplutpi.site',
                'status' => 1,
                'created_at' => '2022-08-21 08:35:47',
                'updated_at' => '2023-03-27 06:11:43',
            ),
        ));
        
        
    }
}