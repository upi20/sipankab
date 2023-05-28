<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PMenuFrontendsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_menu_frontends')->delete();
        
        \DB::table('p_menu_frontends')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'title' => 'Beranda',
                'icon' => NULL,
                'route' => '__base_url__',
                'sequence' => 1,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-20 14:26:10',
                'updated_at' => '2023-04-18 14:04:08',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'title' => 'Tentang',
                'icon' => NULL,
                'route' => 'about',
                'sequence' => 4,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-20 14:30:39',
                'updated_at' => '2023-04-18 14:05:37',
            ),
            2 => 
            array (
                'id' => 18,
                'parent_id' => NULL,
                'title' => 'Kontak',
                'icon' => NULL,
                'route' => 'kontak',
                'sequence' => 10,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-20 14:47:10',
                'updated_at' => '2023-05-04 01:23:09',
            ),
            3 => 
            array (
                'id' => 20,
                'parent_id' => NULL,
                'title' => 'Artikel',
                'icon' => NULL,
                'route' => 'artikel',
                'sequence' => 8,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-09-02 00:45:45',
                'updated_at' => '2023-05-04 01:22:26',
            ),
            4 => 
            array (
                'id' => 22,
                'parent_id' => NULL,
                'title' => 'Katalog',
                'icon' => NULL,
                'route' => 'katalog',
                'sequence' => 12,
                'active' => 0,
                'type' => 1,
                'created_at' => '2023-01-27 22:18:36',
                'updated_at' => '2023-04-18 14:06:22',
            ),
            5 => 
            array (
                'id' => 27,
                'parent_id' => NULL,
                'title' => 'FAQ',
                'icon' => NULL,
                'route' => 'kontak.faq',
                'sequence' => 13,
                'active' => 0,
                'type' => 1,
                'created_at' => '2023-03-10 21:07:26',
                'updated_at' => '2023-04-18 14:06:22',
            ),
            6 => 
            array (
                'id' => 28,
                'parent_id' => NULL,
                'title' => 'Marketplace',
                'icon' => NULL,
                'route' => 'marketplace',
                'sequence' => 11,
                'active' => 0,
                'type' => 1,
                'created_at' => '2023-03-14 17:39:30',
                'updated_at' => '2023-04-18 14:06:22',
            ),
            7 => 
            array (
                'id' => 29,
                'parent_id' => NULL,
                'title' => 'Galeri',
                'icon' => NULL,
                'route' => 'galeri',
                'sequence' => 7,
                'active' => 0,
                'type' => 1,
                'created_at' => '2023-03-26 08:02:10',
                'updated_at' => '2023-04-18 14:06:22',
            ),
            8 => 
            array (
                'id' => 30,
                'parent_id' => NULL,
                'title' => 'Pendaftaran',
                'icon' => NULL,
                'route' => 'pendaftaran',
                'sequence' => 9,
                'active' => 0,
                'type' => 1,
                'created_at' => '2023-03-26 08:02:37',
                'updated_at' => '2023-04-18 14:06:22',
            ),
            9 => 
            array (
                'id' => 31,
                'parent_id' => NULL,
                'title' => 'Layanan',
                'icon' => '__layanan__',
                'route' => '#',
                'sequence' => 2,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-04-18 14:04:31',
                'updated_at' => '2023-05-04 01:05:28',
            ),
            10 => 
            array (
                'id' => 32,
                'parent_id' => 31,
                'title' => 'sub',
                'icon' => '__layanan__',
                'route' => '#',
                'sequence' => 3,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-04-18 14:05:14',
                'updated_at' => '2023-05-04 01:05:09',
            ),
            11 => 
            array (
                'id' => 34,
                'parent_id' => NULL,
                'title' => 'Portfolio',
                'icon' => NULL,
                'route' => '#',
                'sequence' => 5,
                'active' => 0,
                'type' => 1,
                'created_at' => '2023-04-18 14:06:16',
                'updated_at' => '2023-05-04 01:23:40',
            ),
        ));
        
        
    }
}