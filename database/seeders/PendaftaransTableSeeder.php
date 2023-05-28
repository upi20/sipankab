<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PendaftaransTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pendaftarans')->delete();
        
        \DB::table('pendaftarans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Isep Lutpi Nur',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2023-10-01',
                'alamat' => 'Jl Terusan Sapujagat No.225 144F, RT.8/RW.4, Sukaluyu',
                'no_telepon' => '+6285798132505',
                'no_whatsapp' => '+6285798132505',
                'status' => 'DITOLAK',
                'created_at' => '2023-03-26 23:04:19',
                'updated_at' => '2023-03-27 00:10:58',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Isep lutpi nur testing',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2023-03-01',
                'alamat' => 'fsdfsdaf',
                'no_telepon' => '+6285798132505',
                'no_whatsapp' => '6285798132505',
                'status' => 'DITERIMA',
                'created_at' => '2023-03-26 23:06:37',
                'updated_at' => '2023-03-27 00:10:31',
            ),
            2 => 
            array (
                'id' => 4,
                'nama' => 'Isep lutpi nur testing',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2023-03-01',
                'alamat' => 'fsdfsdaf',
                'no_telepon' => '+6285798132505',
                'no_whatsapp' => '6285798132505',
                'status' => 'DITERIMA',
                'created_at' => '2023-03-26 23:06:37',
                'updated_at' => '2023-03-27 00:10:36',
            ),
            3 => 
            array (
                'id' => 5,
                'nama' => 'Isep Lutpi Nur',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2023-10-01',
                'alamat' => 'Jl Terusan Sapujagat No.225 144F, RT.8/RW.4, Sukaluyu',
                'no_telepon' => '+6285798132505',
                'no_whatsapp' => '+6285798132505',
                'status' => NULL,
                'created_at' => '2023-03-26 23:04:19',
                'updated_at' => '2023-03-26 23:04:19',
            ),
            4 => 
            array (
                'id' => 6,
                'nama' => 'Isep lutpi nur testing',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2023-03-01',
                'alamat' => 'fsdfsdaf',
                'no_telepon' => '+6285798132505',
                'no_whatsapp' => '6285798132505',
                'status' => NULL,
                'created_at' => '2023-03-26 23:06:37',
                'updated_at' => '2023-03-26 23:06:37',
            ),
            5 => 
            array (
                'id' => 7,
                'nama' => 'Isep Lutpi Nur',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2023-10-01',
                'alamat' => 'Jl Terusan Sapujagat No.225 144F, RT.8/RW.4, Sukaluyu',
                'no_telepon' => '+6285798132505',
                'no_whatsapp' => '+6285798132505',
                'status' => NULL,
                'created_at' => '2023-03-26 23:04:19',
                'updated_at' => '2023-03-26 23:04:19',
            ),
            6 => 
            array (
                'id' => 8,
                'nama' => 'Isep lutpi nur testing',
                'jenis_kelamin' => 'Perempuan',
                'tanggal_lahir' => '2023-03-01',
                'alamat' => 'fsdfsdaf',
                'no_telepon' => '+6285798132505',
                'no_whatsapp' => '6285798132505',
                'status' => NULL,
                'created_at' => '2023-03-26 23:06:37',
                'updated_at' => '2023-03-26 23:06:37',
            ),
            7 => 
            array (
                'id' => 10,
                'nama' => 'Isep Lutpi Nur',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2000-08-10',
                'alamat' => 'Alamat tes hp',
                'no_telepon' => '5798132505',
                'no_whatsapp' => '123',
                'status' => NULL,
                'created_at' => '2023-03-27 00:53:41',
                'updated_at' => '2023-03-27 00:53:41',
            ),
            8 => 
            array (
                'id' => 12,
                'nama' => 'Adjie Abdul Aziz',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => '2000-08-10',
                'alamat' => 'Tipar Mekarwangi cikadu cianjur',
                'no_telepon' => '+6285798132505',
                'no_whatsapp' => '6825798132505',
                'status' => 'DITUNDA',
                'created_at' => '2023-03-27 05:19:47',
                'updated_at' => '2023-03-27 05:20:05',
            ),
        ));
        
        
    }
}