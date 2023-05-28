<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_media')->delete();
        
        \DB::table('social_media')->insert(array (
            0 => 
            array (
                'id' => 4,
                'nama' => 'Instagram',
                'icon' => 'fab fa-instagram',
                'url' => 'https://www.instagram.com/rumah_tahfizhquran_arrahman/',
                'order' => 1,
                'keterangan' => 'Instagram Utama',
                'status' => 1,
                'created_at' => '2022-04-18 07:02:06',
                'updated_at' => '2023-03-27 06:09:35',
            ),
            1 => 
            array (
                'id' => 6,
                'nama' => 'Facebook',
                'icon' => 'fab fa-facebook-f',
                'url' => 'https://web.facebook.com/profile.php?id=100089909671159',
                'order' => 2,
                'keterangan' => 'Akun Resmi Facebook',
                'status' => 1,
                'created_at' => '2023-03-27 16:32:30',
                'updated_at' => '2023-03-27 21:58:10',
            ),
        ));
        
        
    }
}