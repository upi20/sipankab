<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotifDepanAtasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notif_depan_atas')->delete();
        
        \DB::table('notif_depan_atas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Situs ini masih dalam masa pengembangan.',
                'deskripsi' => 'Website ini masih dalam masa pengembangan. jika anda menemukan error atau ada saran lain-nya bisa menghubungi developer',
                'dari' => '2022-08-02',
                'sampai' => '2023-03-26',
                'link' => 'https://wa.me/+6285798132',
                'link_nama' => 'Klik disini',
                'created_at' => '2022-08-08 22:37:14',
                'updated_at' => '2023-03-27 05:23:17',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Testing',
                'deskripsi' => 'Testing wkwk',
                'dari' => '2022-08-01',
                'sampai' => '2022-08-07',
                'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSdau6VwXEPJ_fiKm1SZAZf4tZ7UCZFGpejVbmfbHevdQcmA5Q/viewform',
                'link_nama' => 'Klik Disini',
                'created_at' => '2022-08-08 22:38:37',
                'updated_at' => '2022-08-08 22:59:36',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Group WA',
                'deskripsi' => 'Untuk Masyarakat Yang Ingin Gabung Atau Mau Bertanya Langsung Bisa',
                'dari' => '2022-11-11',
                'sampai' => '2023-03-08',
                'link' => 'https://chat.whatsapp.com/E9Eumj8OwpbLOplOxPer4e',
                'link_nama' => 'Klik disini',
                'created_at' => '2022-11-12 17:37:38',
                'updated_at' => '2023-03-09 19:04:18',
            ),
        ));
        
        
    }
}