<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_permissions')->delete();
        
        \DB::table('p_permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin.dashboard',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin.user',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'admin.user.delete',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'admin.user.update',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            4 => 
            array (
                'id' => 18,
                'name' => 'admin.menu.admin',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            5 => 
            array (
                'id' => 20,
                'name' => 'admin.menu.admin.insert',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            6 => 
            array (
                'id' => 21,
                'name' => 'admin.menu.admin.update',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            7 => 
            array (
                'id' => 22,
                'name' => 'admin.menu.admin.delete',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            8 => 
            array (
                'id' => 33,
                'name' => 'admin.setting.dashboard',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            9 => 
            array (
                'id' => 35,
                'name' => 'admin.profile',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            10 => 
            array (
                'id' => 36,
                'name' => 'admin.profile.save',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            11 => 
            array (
                'id' => 37,
                'name' => 'admin.profile.password.save',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            12 => 
            array (
                'id' => 38,
                'name' => 'admin.password',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            13 => 
            array (
                'id' => 39,
                'name' => 'admin.password.save',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            14 => 
            array (
                'id' => 40,
                'name' => 'admin.kriteria',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            15 => 
            array (
                'id' => 43,
                'name' => 'admin.kriteria.insert',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            16 => 
            array (
                'id' => 44,
                'name' => 'admin.kriteria.update',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            17 => 
            array (
                'id' => 45,
                'name' => 'admin.kriteria.delete',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            18 => 
            array (
                'id' => 46,
                'name' => 'admin.penduduk',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            19 => 
            array (
                'id' => 51,
                'name' => 'admin.penduduk.insert',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            20 => 
            array (
                'id' => 52,
                'name' => 'admin.penduduk.update',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            21 => 
            array (
                'id' => 53,
                'name' => 'admin.penduduk.set_status',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            22 => 
            array (
                'id' => 54,
                'name' => 'admin.penduduk.delete',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            23 => 
            array (
                'id' => 55,
                'name' => 'admin.import.kriteria',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            24 => 
            array (
                'id' => 58,
                'name' => 'admin.import.kriteria.insert',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            25 => 
            array (
                'id' => 59,
                'name' => 'admin.import.kriteria.update',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            26 => 
            array (
                'id' => 60,
                'name' => 'admin.import.kriteria.delete',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            27 => 
            array (
                'id' => 61,
                'name' => 'admin.import.penduduk',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            28 => 
            array (
                'id' => 64,
                'name' => 'admin.import.penduduk.insert',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            29 => 
            array (
                'id' => 65,
                'name' => 'admin.import.penduduk.update',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
            30 => 
            array (
                'id' => 66,
                'name' => 'admin.import.penduduk.delete',
                'guard_name' => 'web',
                'created_at' => '2023-05-30 01:43:13',
                'updated_at' => '2023-05-30 01:43:13',
            ),
        ));
        
        
    }
}