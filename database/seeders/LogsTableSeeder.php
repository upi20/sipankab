<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('logs')->delete();
        
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:07:49',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/113.0.0.0 Safari\\/537.36 Edg\\/113.0.1774.57"}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:34',
                'table_name' => 'p_menu',
                'log_type' => 'create',
                'data' => '{"sequence":"20","parent_id":null,"active":"1","title":"Perhitungan","icon":"fas fa-calculator","route":"admin.perhitungan","type":"1","updated_at":"2023-05-31T15:08:34.000000Z","created_at":"2023-05-31T15:08:34.000000Z","id":446}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:34',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":446,"updated_at":"2023-05-31T15:08:34.000000Z","created_at":"2023-05-31T15:08:34.000000Z","id":333}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":446,"parent_id":null,"title":"Perhitungan","icon":"fas fa-calculator","route":"admin.perhitungan","sequence":20,"active":1,"type":1,"created_at":"2023-05-31 22:08:34","updated_at":"2023-05-31 22:08:34"}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":6,"active":1,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-05-31 17:17:43"}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":430,"parent_id":null,"title":"Import","icon":"fas fa-upload","route":null,"sequence":7,"active":1,"type":1,"created_at":"2023-05-16 18:10:19","updated_at":"2023-05-31 17:17:43"}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":441,"parent_id":430,"title":"Kecamatan","icon":null,"route":"admin.import.kecamatan","sequence":8,"active":1,"type":1,"created_at":"2023-05-31 16:28:12","updated_at":"2023-05-31 17:17:43"}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":442,"parent_id":430,"title":"Tahapan","icon":null,"route":"admin.import.tahapan","sequence":9,"active":1,"type":1,"created_at":"2023-05-31 16:51:02","updated_at":"2023-05-31 17:17:43"}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":443,"parent_id":430,"title":"Calon","icon":null,"route":"admin.import.calon","sequence":10,"active":1,"type":1,"created_at":"2023-05-31 16:51:20","updated_at":"2023-05-31 17:17:43"}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":11,"active":1,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-05-31 17:17:43"}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":398,"parent_id":397,"title":"Informasi Admin","icon":null,"route":"admin.setting.admin","sequence":12,"active":1,"type":1,"created_at":"2022-08-14 21:11:42","updated_at":"2023-05-31 17:17:43"}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":438,"parent_id":397,"title":"Halaman Dashboard","icon":null,"route":"admin.setting.dashboard","sequence":13,"active":1,"type":1,"created_at":"2023-05-29 20:03:50","updated_at":"2023-05-31 17:17:43"}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"Akses Pengguna","icon":"fas fa-user-check","route":null,"sequence":14,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-31 17:17:43"}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":368,"parent_id":367,"title":"Perizinan","icon":null,"route":"admin.user_access.permission","sequence":15,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-31 17:17:43"}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":369,"parent_id":367,"title":"Sebagai","icon":null,"route":"admin.user_access.role","sequence":16,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-31 17:17:43"}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":346,"parent_id":null,"title":"Pengguna","icon":"fas fa-list","route":"admin.user","sequence":17,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-31 17:17:43"}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":"admin.menu.admin","sequence":18,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-31 17:17:43"}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Profile","icon":"fas fa-user","route":"admin.profile","sequence":19,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-31 17:17:43"}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'log_date' => '2023-05-31 22:08:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":386,"parent_id":null,"title":"Logout","icon":"fas fa-sign-out-alt","route":"logout","sequence":20,"active":1,"type":1,"created_at":"2022-08-05 23:54:09","updated_at":"2023-05-31 17:17:43"}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'log_date' => '2023-06-01 00:41:42',
                'table_name' => 'kecamatan',
                'log_type' => 'edit',
                'data' => '{"id":4,"kode":"320701","nama":" Ciamis","slug":"ciamis","jml_lulus":3,"import_id":1,"created_at":"2023-05-31 16:29:49","updated_at":"2023-05-31 16:29:49"}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'log_date' => '2023-06-01 01:03:13',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.admin.spk.hitung.umumkan","value":0,"updated_at":"2023-05-31T18:03:13.000000Z","created_at":"2023-05-31T18:03:13.000000Z","id":1}',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'log_date' => '2023-06-01 01:03:13',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"setting.admin.spk.hitung.metode","value":"saw","updated_at":"2023-05-31T18:03:13.000000Z","created_at":"2023-05-31T18:03:13.000000Z","id":2}',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'log_date' => '2023-06-01 01:03:46',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"spk.hitung.umumkan","value":0,"updated_at":"2023-05-31T18:03:46.000000Z","created_at":"2023-05-31T18:03:46.000000Z","id":3}',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'log_date' => '2023-06-01 01:03:46',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
                'data' => '{"key":"spk.hitung.metode","value":"saw","updated_at":"2023-05-31T18:03:46.000000Z","created_at":"2023-05-31T18:03:46.000000Z","id":4}',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'log_date' => '2023-06-01 01:05:30',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":3,"key":"spk.hitung.umumkan","value":"0","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 01:03:46"}',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'log_date' => '2023-06-01 01:06:32',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":3,"key":"spk.hitung.umumkan","value":"1","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 01:05:30"}',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'log_date' => '2023-06-01 01:07:09',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":3,"key":"spk.hitung.umumkan","value":"0","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 01:06:32"}',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'log_date' => '2023-06-01 01:07:42',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":3,"key":"spk.hitung.umumkan","value":"1","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 01:07:09"}',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'log_date' => '2023-06-01 01:47:54',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":3,"key":"spk.hitung.umumkan","value":"0","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 01:07:42"}',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'log_date' => '2023-06-01 01:57:36',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":4,"key":"spk.hitung.metode","value":"saw","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 01:03:46"}',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'log_date' => '2023-06-01 02:02:07',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":3,"key":"spk.hitung.umumkan","value":"1","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 01:47:54"}',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'log_date' => '2023-06-01 02:02:19',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":3,"key":"spk.hitung.umumkan","value":"0","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 02:02:07"}',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'log_date' => '2023-06-01 02:18:28',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":4,"key":"spk.hitung.metode","value":"wp","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 01:57:36"}',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'log_date' => '2023-06-01 02:35:00',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":4,"key":"spk.hitung.metode","value":"saw","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 02:18:28"}',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'log_date' => '2023-06-01 02:40:55',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":4,"key":"spk.hitung.metode","value":"wp","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 02:35:00"}',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'log_date' => '2023-06-01 02:43:37',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":4,"key":"spk.hitung.metode","value":"saw","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 02:40:55"}',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'log_date' => '2023-06-01 02:47:36',
                'table_name' => 'setting_activities',
                'log_type' => 'edit',
                'data' => '{"id":4,"key":"spk.hitung.metode","value":"wp","created_at":"2023-06-01 01:03:46","updated_at":"2023-06-01 02:43:37"}',
            ),
        ));
        
        
    }
}