<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_menu')->delete();
        
        \DB::table('p_menu')->insert(array (
            0 => 
            array (
                'id' => 345,
                'parent_id' => NULL,
                'title' => 'Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'admin.dashboard',
                'sequence' => 1,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-04-18 05:36:59',
            ),
            1 => 
            array (
                'id' => 346,
                'parent_id' => NULL,
                'title' => 'Pengguna',
                'icon' => 'fas fa-list',
                'route' => 'admin.user',
                'sequence' => 18,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            2 => 
            array (
                'id' => 361,
                'parent_id' => NULL,
                'title' => 'Menu Management',
                'icon' => 'fas fa-stream',
                'route' => 'admin.menu.admin',
                'sequence' => 19,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            3 => 
            array (
                'id' => 367,
                'parent_id' => NULL,
                'title' => 'Akses Pengguna',
                'icon' => 'fas fa-user-check',
                'route' => NULL,
                'sequence' => 15,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            4 => 
            array (
                'id' => 368,
                'parent_id' => 367,
                'title' => 'Perizinan',
                'icon' => NULL,
                'route' => 'admin.user_access.permission',
                'sequence' => 16,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            5 => 
            array (
                'id' => 369,
                'parent_id' => 367,
                'title' => 'Sebagai',
                'icon' => NULL,
                'route' => 'admin.user_access.role',
                'sequence' => 17,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            6 => 
            array (
                'id' => 373,
                'parent_id' => NULL,
                'title' => 'Profile',
                'icon' => 'fas fa-user',
                'route' => 'admin.profile',
                'sequence' => 20,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            7 => 
            array (
                'id' => 386,
                'parent_id' => NULL,
                'title' => 'Logout',
                'icon' => 'fas fa-sign-out-alt',
                'route' => 'logout',
                'sequence' => 21,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:54:09',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            8 => 
            array (
                'id' => 397,
                'parent_id' => NULL,
                'title' => 'Pengaturan',
                'icon' => 'fas fa-wrench',
                'route' => NULL,
                'sequence' => 12,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-14 21:10:57',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            9 => 
            array (
                'id' => 398,
                'parent_id' => 397,
                'title' => 'Informasi Admin',
                'icon' => NULL,
                'route' => 'admin.setting.admin',
                'sequence' => 13,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-14 21:11:42',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            10 => 
            array (
                'id' => 404,
                'parent_id' => 403,
                'title' => 'Anggota',
                'icon' => NULL,
                'route' => 'admin.lapooran.anggota',
                'sequence' => 41,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-18 18:55:08',
                'updated_at' => '2022-08-20 14:04:25',
            ),
            11 => 
            array (
                'id' => 411,
                'parent_id' => NULL,
                'title' => 'Menu Lainnya',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => 7,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-09-15 21:18:04',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            12 => 
            array (
                'id' => 430,
                'parent_id' => NULL,
                'title' => 'Import',
                'icon' => 'fas fa-upload',
                'route' => NULL,
                'sequence' => 8,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-16 18:10:19',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            13 => 
            array (
                'id' => 438,
                'parent_id' => 397,
                'title' => 'Halaman Dashboard',
                'icon' => NULL,
                'route' => 'admin.setting.dashboard',
                'sequence' => 14,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-29 20:03:50',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            14 => 
            array (
                'id' => 439,
                'parent_id' => NULL,
                'title' => 'Kecamatan',
                'icon' => 'fas fa-clipboard-list',
                'route' => 'admin.kecamatan',
                'sequence' => 2,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-31 16:27:10',
                'updated_at' => '2023-05-31 16:27:15',
            ),
            15 => 
            array (
                'id' => 440,
                'parent_id' => NULL,
                'title' => 'Tahapan',
                'icon' => 'fas fa-edit',
                'route' => 'admin.tahapan',
                'sequence' => 3,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-31 16:27:42',
                'updated_at' => '2023-05-31 16:27:49',
            ),
            16 => 
            array (
                'id' => 441,
                'parent_id' => 430,
                'title' => 'Kecamatan',
                'icon' => NULL,
                'route' => 'admin.import.kecamatan',
                'sequence' => 9,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-31 16:28:12',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            17 => 
            array (
                'id' => 442,
                'parent_id' => 430,
                'title' => 'Tahapan',
                'icon' => NULL,
                'route' => 'admin.import.tahapan',
                'sequence' => 10,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-31 16:51:02',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            18 => 
            array (
                'id' => 443,
                'parent_id' => 430,
                'title' => 'Calon',
                'icon' => NULL,
                'route' => 'admin.import.calon',
                'sequence' => 11,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-31 16:51:20',
                'updated_at' => '2023-05-31 22:08:40',
            ),
            19 => 
            array (
                'id' => 444,
                'parent_id' => NULL,
                'title' => 'Calon',
                'icon' => 'fas fa-user',
                'route' => 'admin.calon',
                'sequence' => 4,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-31 16:53:25',
                'updated_at' => '2023-05-31 16:53:57',
            ),
            20 => 
            array (
                'id' => 445,
                'parent_id' => NULL,
                'title' => 'Calon Nilai',
                'icon' => 'fas fa-user-edit',
                'route' => 'admin.calon.nilai',
                'sequence' => 5,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-31 16:53:42',
                'updated_at' => '2023-05-31 16:53:57',
            ),
            21 => 
            array (
                'id' => 446,
                'parent_id' => NULL,
                'title' => 'Perhitungan',
                'icon' => 'fas fa-calculator',
                'route' => 'admin.perhitungan',
                'sequence' => 6,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-31 22:08:34',
                'updated_at' => '2023-05-31 22:08:40',
            ),
        ));
        
        
    }
}