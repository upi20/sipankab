<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_messages')->delete();
        
        \DB::table('contact_messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Isep Lutpi Nur',
                'email' => 'iseplutpinur7@gmail.com',
                'message' => 'Tes via hp',
                'status' => NULL,
                'created_at' => '2022-08-21 15:49:29',
                'updated_at' => '2022-08-21 15:49:29',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'CANDIDO CRUICKSHANK JR.',
                'email' => 'admin@mail.com',
                'message' => 'a',
                'status' => NULL,
                'created_at' => '2023-01-15 15:21:24',
                'updated_at' => '2023-01-15 15:21:24',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'Testing',
                'email' => 'admin@mail.com',
                'message' => '123',
                'status' => NULL,
                'created_at' => '2023-01-15 15:24:45',
                'updated_at' => '2023-01-15 15:24:45',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'wkgroastery',
                'email' => 'Dr-Bernard-Casper@mail.com',
                'message' => 'Message',
                'status' => NULL,
                'created_at' => '2023-03-10 20:51:40',
                'updated_at' => '2023-03-10 20:51:40',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'Testing',
                'email' => 'maill@testing.com',
                'message' => 'testing message',
                'status' => NULL,
                'created_at' => '2023-03-20 13:31:37',
                'updated_at' => '2023-03-20 13:31:37',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'Tes Kontak',
                'email' => 'kirimpesan@gmail.com',
                'message' => 'Pesan aaaaaaaaa',
                'status' => NULL,
                'created_at' => '2023-03-27 05:00:15',
                'updated_at' => '2023-03-27 05:00:15',
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'fasdfsadf',
                'email' => 'admin@gmail.com',
                'message' => 'asdfasdf',
                'status' => NULL,
                'created_at' => '2023-03-27 05:04:27',
                'updated_at' => '2023-03-27 05:04:27',
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'Contoh pesan diterima dari',
                'email' => 'iseplutpinur7@gmail.com',
                'message' => 'Ini adalah contoh pesan di terima',
                'status' => NULL,
                'created_at' => '2023-03-27 05:20:57',
                'updated_at' => '2023-03-27 05:20:57',
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'Isep lutt',
                'email' => 'igmail@gmail.com',
                'message' => 'fasdf',
                'status' => NULL,
                'created_at' => '2023-05-04 21:28:29',
                'updated_at' => '2023-05-04 21:28:29',
            ),
            9 => 
            array (
                'id' => 10,
                'nama' => 'Isep lutt',
                'email' => 'igmail@gmail.com',
                'message' => 's',
                'status' => NULL,
                'created_at' => '2023-05-04 21:30:06',
                'updated_at' => '2023-05-04 21:30:06',
            ),
        ));
        
        
    }
}