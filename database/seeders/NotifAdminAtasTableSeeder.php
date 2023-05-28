<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NotifAdminAtasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notif_admin_atas')->delete();
        
        \DB::table('notif_admin_atas')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nama' => 'asdfasdf',
                'deskripsi' => 'asdf',
                'dari' => '2023-04-01',
                'sampai' => '2023-04-18',
                'link' => NULL,
                'link_nama' => 'sadffasdf',
                'created_at' => '2023-04-15 16:58:15',
                'updated_at' => '2023-04-19 19:36:41',
            ),
        ));
        
        
    }
}