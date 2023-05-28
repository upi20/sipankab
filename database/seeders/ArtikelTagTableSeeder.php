<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtikelTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artikel_tag')->delete();
        
        \DB::table('artikel_tag')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nama' => 'Lainnya',
                'slug' => 'lainnya',
                'status' => 1,
                'created_at' => '2022-04-13 19:53:46',
                'updated_at' => '2023-03-10 13:53:53',
            ),
            1 => 
            array (
                'id' => 3,
                'nama' => 'Pagi',
                'slug' => 'pagi',
                'status' => 1,
                'created_at' => '2022-04-17 14:46:50',
                'updated_at' => '2023-03-10 13:54:29',
            ),
            2 => 
            array (
                'id' => 4,
                'nama' => 'Sejarah',
                'slug' => 'sejarah',
                'status' => 1,
                'created_at' => '2022-04-17 15:13:33',
                'updated_at' => '2023-03-10 13:53:39',
            ),
            3 => 
            array (
                'id' => 5,
                'nama' => 'tanaman hias',
                'slug' => 'tanaman-hias',
                'status' => 1,
                'created_at' => '2023-01-23 11:39:45',
                'updated_at' => '2023-01-23 11:39:45',
            ),
            4 => 
            array (
                'id' => 6,
                'nama' => 'Edukasi',
                'slug' => 'edukasi',
                'status' => 1,
                'created_at' => '2023-01-23 11:39:45',
                'updated_at' => '2023-03-10 13:53:45',
            ),
            5 => 
            array (
                'id' => 11,
                'nama' => 'tentang kita',
                'slug' => 'tentang-kita',
                'status' => 1,
                'created_at' => '2023-01-25 10:13:25',
                'updated_at' => '2023-01-25 10:13:25',
            ),
            6 => 
            array (
                'id' => 12,
                'nama' => 'Popular',
                'slug' => 'popular',
                'status' => 1,
                'created_at' => '2023-03-10 13:38:43',
                'updated_at' => '2023-03-10 13:38:43',
            ),
            7 => 
            array (
                'id' => 13,
                'nama' => 'Design',
                'slug' => 'design',
                'status' => 1,
                'created_at' => '2023-03-10 13:38:43',
                'updated_at' => '2023-03-10 13:54:06',
            ),
            8 => 
            array (
                'id' => 14,
                'nama' => 'UI/UX',
                'slug' => 'ui-ux',
                'status' => 1,
                'created_at' => '2023-03-10 13:38:43',
                'updated_at' => '2023-03-10 13:38:43',
            ),
            9 => 
            array (
                'id' => 19,
                'nama' => 'Musik',
                'slug' => 'musik',
                'status' => 1,
                'created_at' => '2023-03-10 18:10:51',
                'updated_at' => '2023-03-10 18:10:51',
            ),
            10 => 
            array (
                'id' => 20,
                'nama' => 'Noah',
                'slug' => 'noah',
                'status' => 1,
                'created_at' => '2023-03-10 18:10:51',
                'updated_at' => '2023-03-10 18:10:51',
            ),
        ));
        
        
    }
}