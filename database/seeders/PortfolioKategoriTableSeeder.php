<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioKategoriTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_kategori')->delete();
        
        \DB::table('portfolio_kategori')->insert(array (
            0 => 
            array (
                'id' => 16,
                'urutan' => 0,
                'nama' => 'Web & Programming',
                'slug' => 'web-programming',
                'keterangan' => NULL,
                'created_at' => '2023-04-14 02:25:53',
                'updated_at' => '2023-05-05 09:29:40',
            ),
            1 => 
            array (
                'id' => 17,
                'urutan' => 1,
                'nama' => 'Graphic Design & Branding',
                'slug' => 'graphic-design-branding',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:27:41',
                'updated_at' => '2023-05-03 21:27:41',
            ),
            2 => 
            array (
                'id' => 18,
                'urutan' => 3,
                'nama' => 'Videography, Photography & Audio',
                'slug' => 'videography-photography-audio',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:27:49',
                'updated_at' => '2023-05-03 21:27:49',
            ),
            3 => 
            array (
                'id' => 19,
                'urutan' => 4,
                'nama' => 'Writing & Translation',
                'slug' => 'writing-translation',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:28:08',
                'updated_at' => '2023-05-03 21:28:08',
            ),
            4 => 
            array (
                'id' => 20,
                'urutan' => 5,
                'nama' => 'Marketing & Ads',
                'slug' => 'marketing-ads',
                'keterangan' => NULL,
                'created_at' => '2023-05-03 21:28:14',
                'updated_at' => '2023-05-03 21:28:14',
            ),
        ));
        
        
    }
}