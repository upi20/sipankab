<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CalonNilaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('calon_nilai')->delete();
        
        \DB::table('calon_nilai')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tahapan_id' => 1,
                'calon_id' => 1,
                'nilai' => 95.41,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            1 => 
            array (
                'id' => 2,
                'tahapan_id' => 2,
                'calon_id' => 1,
                'nilai' => 40.41,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            2 => 
            array (
                'id' => 3,
                'tahapan_id' => 3,
                'calon_id' => 1,
                'nilai' => 39.09,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            3 => 
            array (
                'id' => 4,
                'tahapan_id' => 1,
                'calon_id' => 2,
                'nilai' => 37.05,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            4 => 
            array (
                'id' => 5,
                'tahapan_id' => 2,
                'calon_id' => 2,
                'nilai' => 91.38,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            5 => 
            array (
                'id' => 6,
                'tahapan_id' => 3,
                'calon_id' => 2,
                'nilai' => 72.9,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            6 => 
            array (
                'id' => 7,
                'tahapan_id' => 1,
                'calon_id' => 3,
                'nilai' => 41.63,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            7 => 
            array (
                'id' => 8,
                'tahapan_id' => 2,
                'calon_id' => 3,
                'nilai' => 62.06,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            8 => 
            array (
                'id' => 9,
                'tahapan_id' => 3,
                'calon_id' => 3,
                'nilai' => 74.97,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            9 => 
            array (
                'id' => 10,
                'tahapan_id' => 1,
                'calon_id' => 4,
                'nilai' => 40.61,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            10 => 
            array (
                'id' => 11,
                'tahapan_id' => 2,
                'calon_id' => 4,
                'nilai' => 88.67,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            11 => 
            array (
                'id' => 12,
                'tahapan_id' => 3,
                'calon_id' => 4,
                'nilai' => 95.81,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            12 => 
            array (
                'id' => 13,
                'tahapan_id' => 1,
                'calon_id' => 5,
                'nilai' => 41.59,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            13 => 
            array (
                'id' => 14,
                'tahapan_id' => 2,
                'calon_id' => 5,
                'nilai' => 32.35,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            14 => 
            array (
                'id' => 15,
                'tahapan_id' => 3,
                'calon_id' => 5,
                'nilai' => 48.75,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            15 => 
            array (
                'id' => 16,
                'tahapan_id' => 1,
                'calon_id' => 6,
                'nilai' => 88.23,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            16 => 
            array (
                'id' => 17,
                'tahapan_id' => 2,
                'calon_id' => 6,
                'nilai' => 57.93,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            17 => 
            array (
                'id' => 18,
                'tahapan_id' => 3,
                'calon_id' => 6,
                'nilai' => 44.37,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            18 => 
            array (
                'id' => 19,
                'tahapan_id' => 1,
                'calon_id' => 7,
                'nilai' => 69.9,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            19 => 
            array (
                'id' => 20,
                'tahapan_id' => 2,
                'calon_id' => 7,
                'nilai' => 80.91,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            20 => 
            array (
                'id' => 21,
                'tahapan_id' => 3,
                'calon_id' => 7,
                'nilai' => 88.86,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            21 => 
            array (
                'id' => 22,
                'tahapan_id' => 1,
                'calon_id' => 8,
                'nilai' => 58.23,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            22 => 
            array (
                'id' => 23,
                'tahapan_id' => 2,
                'calon_id' => 8,
                'nilai' => 85.44,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            23 => 
            array (
                'id' => 24,
                'tahapan_id' => 3,
                'calon_id' => 8,
                'nilai' => 65.95,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            24 => 
            array (
                'id' => 25,
                'tahapan_id' => 1,
                'calon_id' => 9,
                'nilai' => 95.18,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            25 => 
            array (
                'id' => 26,
                'tahapan_id' => 2,
                'calon_id' => 9,
                'nilai' => 29.69,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            26 => 
            array (
                'id' => 27,
                'tahapan_id' => 3,
                'calon_id' => 9,
                'nilai' => 41.35,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            27 => 
            array (
                'id' => 28,
                'tahapan_id' => 1,
                'calon_id' => 10,
                'nilai' => 78.21,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            28 => 
            array (
                'id' => 29,
                'tahapan_id' => 2,
                'calon_id' => 10,
                'nilai' => 83.87,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            29 => 
            array (
                'id' => 30,
                'tahapan_id' => 3,
                'calon_id' => 10,
                'nilai' => 48.85,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            30 => 
            array (
                'id' => 31,
                'tahapan_id' => 1,
                'calon_id' => 11,
                'nilai' => 38.03,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            31 => 
            array (
                'id' => 32,
                'tahapan_id' => 2,
                'calon_id' => 11,
                'nilai' => 72.05,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            32 => 
            array (
                'id' => 33,
                'tahapan_id' => 3,
                'calon_id' => 11,
                'nilai' => 75.23,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            33 => 
            array (
                'id' => 34,
                'tahapan_id' => 1,
                'calon_id' => 12,
                'nilai' => 55.12,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            34 => 
            array (
                'id' => 35,
                'tahapan_id' => 2,
                'calon_id' => 12,
                'nilai' => 49.79,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            35 => 
            array (
                'id' => 36,
                'tahapan_id' => 3,
                'calon_id' => 12,
                'nilai' => 87.1,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            36 => 
            array (
                'id' => 37,
                'tahapan_id' => 1,
                'calon_id' => 13,
                'nilai' => 81.44,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            37 => 
            array (
                'id' => 38,
                'tahapan_id' => 2,
                'calon_id' => 13,
                'nilai' => 90.37,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            38 => 
            array (
                'id' => 39,
                'tahapan_id' => 3,
                'calon_id' => 13,
                'nilai' => 63.48,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            39 => 
            array (
                'id' => 40,
                'tahapan_id' => 1,
                'calon_id' => 14,
                'nilai' => 29.3,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            40 => 
            array (
                'id' => 41,
                'tahapan_id' => 2,
                'calon_id' => 14,
                'nilai' => 65.02,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            41 => 
            array (
                'id' => 42,
                'tahapan_id' => 3,
                'calon_id' => 14,
                'nilai' => 76.19,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            42 => 
            array (
                'id' => 43,
                'tahapan_id' => 1,
                'calon_id' => 15,
                'nilai' => 69.29,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            43 => 
            array (
                'id' => 44,
                'tahapan_id' => 2,
                'calon_id' => 15,
                'nilai' => 59.86,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            44 => 
            array (
                'id' => 45,
                'tahapan_id' => 3,
                'calon_id' => 15,
                'nilai' => 98.7,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            45 => 
            array (
                'id' => 46,
                'tahapan_id' => 1,
                'calon_id' => 16,
                'nilai' => 50.18,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            46 => 
            array (
                'id' => 47,
                'tahapan_id' => 2,
                'calon_id' => 16,
                'nilai' => 32.07,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            47 => 
            array (
                'id' => 48,
                'tahapan_id' => 3,
                'calon_id' => 16,
                'nilai' => 36.48,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            48 => 
            array (
                'id' => 49,
                'tahapan_id' => 1,
                'calon_id' => 17,
                'nilai' => 40.14,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            49 => 
            array (
                'id' => 50,
                'tahapan_id' => 2,
                'calon_id' => 17,
                'nilai' => 64.9,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            50 => 
            array (
                'id' => 51,
                'tahapan_id' => 3,
                'calon_id' => 17,
                'nilai' => 83.21,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            51 => 
            array (
                'id' => 52,
                'tahapan_id' => 1,
                'calon_id' => 18,
                'nilai' => 61.91,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            52 => 
            array (
                'id' => 53,
                'tahapan_id' => 2,
                'calon_id' => 18,
                'nilai' => 51.14,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            53 => 
            array (
                'id' => 54,
                'tahapan_id' => 3,
                'calon_id' => 18,
                'nilai' => 73.6,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            54 => 
            array (
                'id' => 55,
                'tahapan_id' => 1,
                'calon_id' => 19,
                'nilai' => 51.83,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            55 => 
            array (
                'id' => 56,
                'tahapan_id' => 2,
                'calon_id' => 19,
                'nilai' => 31.79,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            56 => 
            array (
                'id' => 57,
                'tahapan_id' => 3,
                'calon_id' => 19,
                'nilai' => 56.9,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            57 => 
            array (
                'id' => 58,
                'tahapan_id' => 1,
                'calon_id' => 20,
                'nilai' => 58.61,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            58 => 
            array (
                'id' => 59,
                'tahapan_id' => 2,
                'calon_id' => 20,
                'nilai' => 97.85,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            59 => 
            array (
                'id' => 60,
                'tahapan_id' => 3,
                'calon_id' => 20,
                'nilai' => 94.75,
                'created_at' => '2023-05-31 16:52:44',
                'updated_at' => '2023-05-31 16:52:44',
            ),
            60 => 
            array (
                'id' => 61,
                'tahapan_id' => 1,
                'calon_id' => 21,
                'nilai' => 57.67,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            61 => 
            array (
                'id' => 62,
                'tahapan_id' => 2,
                'calon_id' => 21,
                'nilai' => 28.58,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            62 => 
            array (
                'id' => 63,
                'tahapan_id' => 3,
                'calon_id' => 21,
                'nilai' => 96.9,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            63 => 
            array (
                'id' => 64,
                'tahapan_id' => 1,
                'calon_id' => 22,
                'nilai' => 44.42,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            64 => 
            array (
                'id' => 65,
                'tahapan_id' => 2,
                'calon_id' => 22,
                'nilai' => 39.24,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            65 => 
            array (
                'id' => 66,
                'tahapan_id' => 3,
                'calon_id' => 22,
                'nilai' => 74.45,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            66 => 
            array (
                'id' => 67,
                'tahapan_id' => 1,
                'calon_id' => 23,
                'nilai' => 80.14,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            67 => 
            array (
                'id' => 68,
                'tahapan_id' => 2,
                'calon_id' => 23,
                'nilai' => 89.0,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            68 => 
            array (
                'id' => 69,
                'tahapan_id' => 3,
                'calon_id' => 23,
                'nilai' => 94.18,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            69 => 
            array (
                'id' => 70,
                'tahapan_id' => 1,
                'calon_id' => 24,
                'nilai' => 37.61,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            70 => 
            array (
                'id' => 71,
                'tahapan_id' => 2,
                'calon_id' => 24,
                'nilai' => 50.38,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            71 => 
            array (
                'id' => 72,
                'tahapan_id' => 3,
                'calon_id' => 24,
                'nilai' => 32.73,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            72 => 
            array (
                'id' => 73,
                'tahapan_id' => 1,
                'calon_id' => 25,
                'nilai' => 69.16,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            73 => 
            array (
                'id' => 74,
                'tahapan_id' => 2,
                'calon_id' => 25,
                'nilai' => 79.01,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            74 => 
            array (
                'id' => 75,
                'tahapan_id' => 3,
                'calon_id' => 25,
                'nilai' => 75.88,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            75 => 
            array (
                'id' => 76,
                'tahapan_id' => 1,
                'calon_id' => 26,
                'nilai' => 58.99,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            76 => 
            array (
                'id' => 77,
                'tahapan_id' => 2,
                'calon_id' => 26,
                'nilai' => 85.56,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            77 => 
            array (
                'id' => 78,
                'tahapan_id' => 3,
                'calon_id' => 26,
                'nilai' => 59.42,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            78 => 
            array (
                'id' => 79,
                'tahapan_id' => 1,
                'calon_id' => 27,
                'nilai' => 87.85,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            79 => 
            array (
                'id' => 80,
                'tahapan_id' => 2,
                'calon_id' => 27,
                'nilai' => 46.15,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            80 => 
            array (
                'id' => 81,
                'tahapan_id' => 3,
                'calon_id' => 27,
                'nilai' => 97.03,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            81 => 
            array (
                'id' => 82,
                'tahapan_id' => 1,
                'calon_id' => 28,
                'nilai' => 79.09,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            82 => 
            array (
                'id' => 83,
                'tahapan_id' => 2,
                'calon_id' => 28,
                'nilai' => 69.07,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            83 => 
            array (
                'id' => 84,
                'tahapan_id' => 3,
                'calon_id' => 28,
                'nilai' => 44.05,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            84 => 
            array (
                'id' => 85,
                'tahapan_id' => 1,
                'calon_id' => 29,
                'nilai' => 25.93,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            85 => 
            array (
                'id' => 86,
                'tahapan_id' => 2,
                'calon_id' => 29,
                'nilai' => 52.38,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            86 => 
            array (
                'id' => 87,
                'tahapan_id' => 3,
                'calon_id' => 29,
                'nilai' => 67.38,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            87 => 
            array (
                'id' => 88,
                'tahapan_id' => 1,
                'calon_id' => 30,
                'nilai' => 69.16,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            88 => 
            array (
                'id' => 89,
                'tahapan_id' => 2,
                'calon_id' => 30,
                'nilai' => 93.64,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            89 => 
            array (
                'id' => 90,
                'tahapan_id' => 3,
                'calon_id' => 30,
                'nilai' => 28.54,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            90 => 
            array (
                'id' => 91,
                'tahapan_id' => 1,
                'calon_id' => 31,
                'nilai' => 49.4,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            91 => 
            array (
                'id' => 92,
                'tahapan_id' => 2,
                'calon_id' => 31,
                'nilai' => 63.34,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            92 => 
            array (
                'id' => 93,
                'tahapan_id' => 3,
                'calon_id' => 31,
                'nilai' => 79.3,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            93 => 
            array (
                'id' => 94,
                'tahapan_id' => 1,
                'calon_id' => 32,
                'nilai' => 84.88,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            94 => 
            array (
                'id' => 95,
                'tahapan_id' => 2,
                'calon_id' => 32,
                'nilai' => 76.29,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            95 => 
            array (
                'id' => 96,
                'tahapan_id' => 3,
                'calon_id' => 32,
                'nilai' => 30.9,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            96 => 
            array (
                'id' => 97,
                'tahapan_id' => 1,
                'calon_id' => 33,
                'nilai' => 71.36,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            97 => 
            array (
                'id' => 98,
                'tahapan_id' => 2,
                'calon_id' => 33,
                'nilai' => 94.46,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            98 => 
            array (
                'id' => 99,
                'tahapan_id' => 3,
                'calon_id' => 33,
                'nilai' => 36.2,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            99 => 
            array (
                'id' => 100,
                'tahapan_id' => 1,
                'calon_id' => 34,
                'nilai' => 48.72,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            100 => 
            array (
                'id' => 101,
                'tahapan_id' => 2,
                'calon_id' => 34,
                'nilai' => 98.19,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            101 => 
            array (
                'id' => 102,
                'tahapan_id' => 3,
                'calon_id' => 34,
                'nilai' => 34.49,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            102 => 
            array (
                'id' => 103,
                'tahapan_id' => 1,
                'calon_id' => 35,
                'nilai' => 61.51,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            103 => 
            array (
                'id' => 104,
                'tahapan_id' => 2,
                'calon_id' => 35,
                'nilai' => 86.93,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            104 => 
            array (
                'id' => 105,
                'tahapan_id' => 3,
                'calon_id' => 35,
                'nilai' => 28.27,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            105 => 
            array (
                'id' => 106,
                'tahapan_id' => 1,
                'calon_id' => 36,
                'nilai' => 64.17,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            106 => 
            array (
                'id' => 107,
                'tahapan_id' => 2,
                'calon_id' => 36,
                'nilai' => 34.57,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            107 => 
            array (
                'id' => 108,
                'tahapan_id' => 3,
                'calon_id' => 36,
                'nilai' => 98.5,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            108 => 
            array (
                'id' => 109,
                'tahapan_id' => 1,
                'calon_id' => 37,
                'nilai' => 32.77,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            109 => 
            array (
                'id' => 110,
                'tahapan_id' => 2,
                'calon_id' => 37,
                'nilai' => 82.89,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            110 => 
            array (
                'id' => 111,
                'tahapan_id' => 3,
                'calon_id' => 37,
                'nilai' => 34.92,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            111 => 
            array (
                'id' => 112,
                'tahapan_id' => 1,
                'calon_id' => 38,
                'nilai' => 76.89,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            112 => 
            array (
                'id' => 113,
                'tahapan_id' => 2,
                'calon_id' => 38,
                'nilai' => 26.59,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            113 => 
            array (
                'id' => 114,
                'tahapan_id' => 3,
                'calon_id' => 38,
                'nilai' => 64.07,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            114 => 
            array (
                'id' => 115,
                'tahapan_id' => 1,
                'calon_id' => 39,
                'nilai' => 75.57,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            115 => 
            array (
                'id' => 116,
                'tahapan_id' => 2,
                'calon_id' => 39,
                'nilai' => 69.79,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            116 => 
            array (
                'id' => 117,
                'tahapan_id' => 3,
                'calon_id' => 39,
                'nilai' => 87.22,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            117 => 
            array (
                'id' => 118,
                'tahapan_id' => 1,
                'calon_id' => 40,
                'nilai' => 87.84,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            118 => 
            array (
                'id' => 119,
                'tahapan_id' => 2,
                'calon_id' => 40,
                'nilai' => 53.1,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            119 => 
            array (
                'id' => 120,
                'tahapan_id' => 3,
                'calon_id' => 40,
                'nilai' => 84.31,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            120 => 
            array (
                'id' => 121,
                'tahapan_id' => 1,
                'calon_id' => 41,
                'nilai' => 84.86,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            121 => 
            array (
                'id' => 122,
                'tahapan_id' => 2,
                'calon_id' => 41,
                'nilai' => 65.23,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            122 => 
            array (
                'id' => 123,
                'tahapan_id' => 3,
                'calon_id' => 41,
                'nilai' => 67.53,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            123 => 
            array (
                'id' => 124,
                'tahapan_id' => 1,
                'calon_id' => 42,
                'nilai' => 34.7,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            124 => 
            array (
                'id' => 125,
                'tahapan_id' => 2,
                'calon_id' => 42,
                'nilai' => 51.35,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            125 => 
            array (
                'id' => 126,
                'tahapan_id' => 3,
                'calon_id' => 42,
                'nilai' => 46.82,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            126 => 
            array (
                'id' => 127,
                'tahapan_id' => 1,
                'calon_id' => 43,
                'nilai' => 94.48,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            127 => 
            array (
                'id' => 128,
                'tahapan_id' => 2,
                'calon_id' => 43,
                'nilai' => 57.99,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            128 => 
            array (
                'id' => 129,
                'tahapan_id' => 3,
                'calon_id' => 43,
                'nilai' => 26.22,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            129 => 
            array (
                'id' => 130,
                'tahapan_id' => 1,
                'calon_id' => 44,
                'nilai' => 49.1,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            130 => 
            array (
                'id' => 131,
                'tahapan_id' => 2,
                'calon_id' => 44,
                'nilai' => 58.4,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            131 => 
            array (
                'id' => 132,
                'tahapan_id' => 3,
                'calon_id' => 44,
                'nilai' => 50.86,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            132 => 
            array (
                'id' => 133,
                'tahapan_id' => 1,
                'calon_id' => 45,
                'nilai' => 37.05,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            133 => 
            array (
                'id' => 134,
                'tahapan_id' => 2,
                'calon_id' => 45,
                'nilai' => 51.67,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            134 => 
            array (
                'id' => 135,
                'tahapan_id' => 3,
                'calon_id' => 45,
                'nilai' => 83.61,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            135 => 
            array (
                'id' => 136,
                'tahapan_id' => 1,
                'calon_id' => 46,
                'nilai' => 43.88,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            136 => 
            array (
                'id' => 137,
                'tahapan_id' => 2,
                'calon_id' => 46,
                'nilai' => 61.17,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            137 => 
            array (
                'id' => 138,
                'tahapan_id' => 3,
                'calon_id' => 46,
                'nilai' => 84.91,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            138 => 
            array (
                'id' => 139,
                'tahapan_id' => 1,
                'calon_id' => 47,
                'nilai' => 81.43,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            139 => 
            array (
                'id' => 140,
                'tahapan_id' => 2,
                'calon_id' => 47,
                'nilai' => 87.37,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            140 => 
            array (
                'id' => 141,
                'tahapan_id' => 3,
                'calon_id' => 47,
                'nilai' => 91.02,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            141 => 
            array (
                'id' => 142,
                'tahapan_id' => 1,
                'calon_id' => 48,
                'nilai' => 94.97,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            142 => 
            array (
                'id' => 143,
                'tahapan_id' => 2,
                'calon_id' => 48,
                'nilai' => 73.75,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            143 => 
            array (
                'id' => 144,
                'tahapan_id' => 3,
                'calon_id' => 48,
                'nilai' => 29.54,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            144 => 
            array (
                'id' => 145,
                'tahapan_id' => 1,
                'calon_id' => 49,
                'nilai' => 37.49,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            145 => 
            array (
                'id' => 146,
                'tahapan_id' => 2,
                'calon_id' => 49,
                'nilai' => 65.54,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            146 => 
            array (
                'id' => 147,
                'tahapan_id' => 3,
                'calon_id' => 49,
                'nilai' => 59.42,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            147 => 
            array (
                'id' => 148,
                'tahapan_id' => 1,
                'calon_id' => 50,
                'nilai' => 43.7,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            148 => 
            array (
                'id' => 149,
                'tahapan_id' => 2,
                'calon_id' => 50,
                'nilai' => 46.2,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            149 => 
            array (
                'id' => 150,
                'tahapan_id' => 3,
                'calon_id' => 50,
                'nilai' => 99.27,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            150 => 
            array (
                'id' => 151,
                'tahapan_id' => 1,
                'calon_id' => 51,
                'nilai' => 32.33,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            151 => 
            array (
                'id' => 152,
                'tahapan_id' => 2,
                'calon_id' => 51,
                'nilai' => 56.05,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            152 => 
            array (
                'id' => 153,
                'tahapan_id' => 3,
                'calon_id' => 51,
                'nilai' => 88.77,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            153 => 
            array (
                'id' => 154,
                'tahapan_id' => 1,
                'calon_id' => 52,
                'nilai' => 45.57,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            154 => 
            array (
                'id' => 155,
                'tahapan_id' => 2,
                'calon_id' => 52,
                'nilai' => 55.51,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            155 => 
            array (
                'id' => 156,
                'tahapan_id' => 3,
                'calon_id' => 52,
                'nilai' => 30.02,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            156 => 
            array (
                'id' => 157,
                'tahapan_id' => 1,
                'calon_id' => 53,
                'nilai' => 82.8,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            157 => 
            array (
                'id' => 158,
                'tahapan_id' => 2,
                'calon_id' => 53,
                'nilai' => 69.03,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            158 => 
            array (
                'id' => 159,
                'tahapan_id' => 3,
                'calon_id' => 53,
                'nilai' => 89.49,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            159 => 
            array (
                'id' => 160,
                'tahapan_id' => 1,
                'calon_id' => 54,
                'nilai' => 57.57,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            160 => 
            array (
                'id' => 161,
                'tahapan_id' => 2,
                'calon_id' => 54,
                'nilai' => 91.98,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            161 => 
            array (
                'id' => 162,
                'tahapan_id' => 3,
                'calon_id' => 54,
                'nilai' => 56.78,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            162 => 
            array (
                'id' => 163,
                'tahapan_id' => 1,
                'calon_id' => 55,
                'nilai' => 83.47,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            163 => 
            array (
                'id' => 164,
                'tahapan_id' => 2,
                'calon_id' => 55,
                'nilai' => 28.55,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            164 => 
            array (
                'id' => 165,
                'tahapan_id' => 3,
                'calon_id' => 55,
                'nilai' => 94.12,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            165 => 
            array (
                'id' => 166,
                'tahapan_id' => 1,
                'calon_id' => 56,
                'nilai' => 38.91,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            166 => 
            array (
                'id' => 167,
                'tahapan_id' => 2,
                'calon_id' => 56,
                'nilai' => 42.28,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            167 => 
            array (
                'id' => 168,
                'tahapan_id' => 3,
                'calon_id' => 56,
                'nilai' => 84.16,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            168 => 
            array (
                'id' => 169,
                'tahapan_id' => 1,
                'calon_id' => 57,
                'nilai' => 73.33,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            169 => 
            array (
                'id' => 170,
                'tahapan_id' => 2,
                'calon_id' => 57,
                'nilai' => 83.7,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            170 => 
            array (
                'id' => 171,
                'tahapan_id' => 3,
                'calon_id' => 57,
                'nilai' => 85.73,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            171 => 
            array (
                'id' => 172,
                'tahapan_id' => 1,
                'calon_id' => 58,
                'nilai' => 93.91,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            172 => 
            array (
                'id' => 173,
                'tahapan_id' => 2,
                'calon_id' => 58,
                'nilai' => 99.43,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            173 => 
            array (
                'id' => 174,
                'tahapan_id' => 3,
                'calon_id' => 58,
                'nilai' => 87.49,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            174 => 
            array (
                'id' => 175,
                'tahapan_id' => 1,
                'calon_id' => 59,
                'nilai' => 57.5,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            175 => 
            array (
                'id' => 176,
                'tahapan_id' => 2,
                'calon_id' => 59,
                'nilai' => 70.04,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            176 => 
            array (
                'id' => 177,
                'tahapan_id' => 3,
                'calon_id' => 59,
                'nilai' => 95.48,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            177 => 
            array (
                'id' => 178,
                'tahapan_id' => 1,
                'calon_id' => 60,
                'nilai' => 65.21,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            178 => 
            array (
                'id' => 179,
                'tahapan_id' => 2,
                'calon_id' => 60,
                'nilai' => 67.51,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            179 => 
            array (
                'id' => 180,
                'tahapan_id' => 3,
                'calon_id' => 60,
                'nilai' => 58.15,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            180 => 
            array (
                'id' => 181,
                'tahapan_id' => 1,
                'calon_id' => 61,
                'nilai' => 37.48,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            181 => 
            array (
                'id' => 182,
                'tahapan_id' => 2,
                'calon_id' => 61,
                'nilai' => 62.96,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            182 => 
            array (
                'id' => 183,
                'tahapan_id' => 3,
                'calon_id' => 61,
                'nilai' => 28.59,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            183 => 
            array (
                'id' => 184,
                'tahapan_id' => 1,
                'calon_id' => 62,
                'nilai' => 45.28,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            184 => 
            array (
                'id' => 185,
                'tahapan_id' => 2,
                'calon_id' => 62,
                'nilai' => 89.56,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            185 => 
            array (
                'id' => 186,
                'tahapan_id' => 3,
                'calon_id' => 62,
                'nilai' => 91.22,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            186 => 
            array (
                'id' => 187,
                'tahapan_id' => 1,
                'calon_id' => 63,
                'nilai' => 44.23,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            187 => 
            array (
                'id' => 188,
                'tahapan_id' => 2,
                'calon_id' => 63,
                'nilai' => 34.93,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            188 => 
            array (
                'id' => 189,
                'tahapan_id' => 3,
                'calon_id' => 63,
                'nilai' => 31.97,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            189 => 
            array (
                'id' => 190,
                'tahapan_id' => 1,
                'calon_id' => 64,
                'nilai' => 92.24,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            190 => 
            array (
                'id' => 191,
                'tahapan_id' => 2,
                'calon_id' => 64,
                'nilai' => 57.11,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            191 => 
            array (
                'id' => 192,
                'tahapan_id' => 3,
                'calon_id' => 64,
                'nilai' => 78.88,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            192 => 
            array (
                'id' => 193,
                'tahapan_id' => 1,
                'calon_id' => 65,
                'nilai' => 26.77,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            193 => 
            array (
                'id' => 194,
                'tahapan_id' => 2,
                'calon_id' => 65,
                'nilai' => 52.04,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            194 => 
            array (
                'id' => 195,
                'tahapan_id' => 3,
                'calon_id' => 65,
                'nilai' => 39.85,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            195 => 
            array (
                'id' => 196,
                'tahapan_id' => 1,
                'calon_id' => 66,
                'nilai' => 68.48,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            196 => 
            array (
                'id' => 197,
                'tahapan_id' => 2,
                'calon_id' => 66,
                'nilai' => 56.78,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            197 => 
            array (
                'id' => 198,
                'tahapan_id' => 3,
                'calon_id' => 66,
                'nilai' => 56.62,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            198 => 
            array (
                'id' => 199,
                'tahapan_id' => 1,
                'calon_id' => 67,
                'nilai' => 98.09,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            199 => 
            array (
                'id' => 200,
                'tahapan_id' => 2,
                'calon_id' => 67,
                'nilai' => 51.59,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            200 => 
            array (
                'id' => 201,
                'tahapan_id' => 3,
                'calon_id' => 67,
                'nilai' => 36.58,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            201 => 
            array (
                'id' => 202,
                'tahapan_id' => 1,
                'calon_id' => 68,
                'nilai' => 96.06,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            202 => 
            array (
                'id' => 203,
                'tahapan_id' => 2,
                'calon_id' => 68,
                'nilai' => 70.42,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            203 => 
            array (
                'id' => 204,
                'tahapan_id' => 3,
                'calon_id' => 68,
                'nilai' => 64.92,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            204 => 
            array (
                'id' => 205,
                'tahapan_id' => 1,
                'calon_id' => 69,
                'nilai' => 78.58,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            205 => 
            array (
                'id' => 206,
                'tahapan_id' => 2,
                'calon_id' => 69,
                'nilai' => 69.65,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            206 => 
            array (
                'id' => 207,
                'tahapan_id' => 3,
                'calon_id' => 69,
                'nilai' => 53.11,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            207 => 
            array (
                'id' => 208,
                'tahapan_id' => 1,
                'calon_id' => 70,
                'nilai' => 70.0,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            208 => 
            array (
                'id' => 209,
                'tahapan_id' => 2,
                'calon_id' => 70,
                'nilai' => 44.64,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            209 => 
            array (
                'id' => 210,
                'tahapan_id' => 3,
                'calon_id' => 70,
                'nilai' => 42.52,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            210 => 
            array (
                'id' => 211,
                'tahapan_id' => 1,
                'calon_id' => 71,
                'nilai' => 66.05,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            211 => 
            array (
                'id' => 212,
                'tahapan_id' => 2,
                'calon_id' => 71,
                'nilai' => 37.3,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            212 => 
            array (
                'id' => 213,
                'tahapan_id' => 3,
                'calon_id' => 71,
                'nilai' => 35.66,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            213 => 
            array (
                'id' => 214,
                'tahapan_id' => 1,
                'calon_id' => 72,
                'nilai' => 57.58,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            214 => 
            array (
                'id' => 215,
                'tahapan_id' => 2,
                'calon_id' => 72,
                'nilai' => 80.17,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            215 => 
            array (
                'id' => 216,
                'tahapan_id' => 3,
                'calon_id' => 72,
                'nilai' => 26.81,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            216 => 
            array (
                'id' => 217,
                'tahapan_id' => 1,
                'calon_id' => 73,
                'nilai' => 36.41,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            217 => 
            array (
                'id' => 218,
                'tahapan_id' => 2,
                'calon_id' => 73,
                'nilai' => 80.67,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            218 => 
            array (
                'id' => 219,
                'tahapan_id' => 3,
                'calon_id' => 73,
                'nilai' => 73.95,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            219 => 
            array (
                'id' => 220,
                'tahapan_id' => 1,
                'calon_id' => 74,
                'nilai' => 48.73,
                'created_at' => '2023-05-31 16:52:45',
                'updated_at' => '2023-05-31 16:52:45',
            ),
            220 => 
            array (
                'id' => 221,
                'tahapan_id' => 2,
                'calon_id' => 74,
                'nilai' => 61.22,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            221 => 
            array (
                'id' => 222,
                'tahapan_id' => 3,
                'calon_id' => 74,
                'nilai' => 42.47,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            222 => 
            array (
                'id' => 223,
                'tahapan_id' => 1,
                'calon_id' => 75,
                'nilai' => 97.19,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            223 => 
            array (
                'id' => 224,
                'tahapan_id' => 2,
                'calon_id' => 75,
                'nilai' => 35.9,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            224 => 
            array (
                'id' => 225,
                'tahapan_id' => 3,
                'calon_id' => 75,
                'nilai' => 88.87,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            225 => 
            array (
                'id' => 226,
                'tahapan_id' => 1,
                'calon_id' => 76,
                'nilai' => 95.11,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            226 => 
            array (
                'id' => 227,
                'tahapan_id' => 2,
                'calon_id' => 76,
                'nilai' => 52.06,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            227 => 
            array (
                'id' => 228,
                'tahapan_id' => 3,
                'calon_id' => 76,
                'nilai' => 86.74,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            228 => 
            array (
                'id' => 229,
                'tahapan_id' => 1,
                'calon_id' => 77,
                'nilai' => 71.48,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            229 => 
            array (
                'id' => 230,
                'tahapan_id' => 2,
                'calon_id' => 77,
                'nilai' => 40.67,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            230 => 
            array (
                'id' => 231,
                'tahapan_id' => 3,
                'calon_id' => 77,
                'nilai' => 64.68,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            231 => 
            array (
                'id' => 232,
                'tahapan_id' => 1,
                'calon_id' => 78,
                'nilai' => 34.63,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            232 => 
            array (
                'id' => 233,
                'tahapan_id' => 2,
                'calon_id' => 78,
                'nilai' => 67.03,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            233 => 
            array (
                'id' => 234,
                'tahapan_id' => 3,
                'calon_id' => 78,
                'nilai' => 35.44,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            234 => 
            array (
                'id' => 235,
                'tahapan_id' => 1,
                'calon_id' => 79,
                'nilai' => 39.74,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            235 => 
            array (
                'id' => 236,
                'tahapan_id' => 2,
                'calon_id' => 79,
                'nilai' => 53.21,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            236 => 
            array (
                'id' => 237,
                'tahapan_id' => 3,
                'calon_id' => 79,
                'nilai' => 78.21,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            237 => 
            array (
                'id' => 238,
                'tahapan_id' => 1,
                'calon_id' => 80,
                'nilai' => 69.31,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            238 => 
            array (
                'id' => 239,
                'tahapan_id' => 2,
                'calon_id' => 80,
                'nilai' => 92.28,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            239 => 
            array (
                'id' => 240,
                'tahapan_id' => 3,
                'calon_id' => 80,
                'nilai' => 63.72,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            240 => 
            array (
                'id' => 241,
                'tahapan_id' => 1,
                'calon_id' => 81,
                'nilai' => 33.18,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            241 => 
            array (
                'id' => 242,
                'tahapan_id' => 2,
                'calon_id' => 81,
                'nilai' => 80.94,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            242 => 
            array (
                'id' => 243,
                'tahapan_id' => 3,
                'calon_id' => 81,
                'nilai' => 31.3,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            243 => 
            array (
                'id' => 244,
                'tahapan_id' => 1,
                'calon_id' => 82,
                'nilai' => 39.82,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            244 => 
            array (
                'id' => 245,
                'tahapan_id' => 2,
                'calon_id' => 82,
                'nilai' => 34.15,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            245 => 
            array (
                'id' => 246,
                'tahapan_id' => 3,
                'calon_id' => 82,
                'nilai' => 42.87,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            246 => 
            array (
                'id' => 247,
                'tahapan_id' => 1,
                'calon_id' => 83,
                'nilai' => 67.38,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            247 => 
            array (
                'id' => 248,
                'tahapan_id' => 2,
                'calon_id' => 83,
                'nilai' => 66.37,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            248 => 
            array (
                'id' => 249,
                'tahapan_id' => 3,
                'calon_id' => 83,
                'nilai' => 97.72,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            249 => 
            array (
                'id' => 250,
                'tahapan_id' => 1,
                'calon_id' => 84,
                'nilai' => 46.34,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            250 => 
            array (
                'id' => 251,
                'tahapan_id' => 2,
                'calon_id' => 84,
                'nilai' => 93.6,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            251 => 
            array (
                'id' => 252,
                'tahapan_id' => 3,
                'calon_id' => 84,
                'nilai' => 62.8,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            252 => 
            array (
                'id' => 253,
                'tahapan_id' => 1,
                'calon_id' => 85,
                'nilai' => 88.38,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            253 => 
            array (
                'id' => 254,
                'tahapan_id' => 2,
                'calon_id' => 85,
                'nilai' => 68.24,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            254 => 
            array (
                'id' => 255,
                'tahapan_id' => 3,
                'calon_id' => 85,
                'nilai' => 94.3,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            255 => 
            array (
                'id' => 256,
                'tahapan_id' => 1,
                'calon_id' => 86,
                'nilai' => 91.4,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            256 => 
            array (
                'id' => 257,
                'tahapan_id' => 2,
                'calon_id' => 86,
                'nilai' => 79.76,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            257 => 
            array (
                'id' => 258,
                'tahapan_id' => 3,
                'calon_id' => 86,
                'nilai' => 89.1,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            258 => 
            array (
                'id' => 259,
                'tahapan_id' => 1,
                'calon_id' => 87,
                'nilai' => 87.25,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            259 => 
            array (
                'id' => 260,
                'tahapan_id' => 2,
                'calon_id' => 87,
                'nilai' => 52.28,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            260 => 
            array (
                'id' => 261,
                'tahapan_id' => 3,
                'calon_id' => 87,
                'nilai' => 67.01,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            261 => 
            array (
                'id' => 262,
                'tahapan_id' => 1,
                'calon_id' => 88,
                'nilai' => 28.52,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            262 => 
            array (
                'id' => 263,
                'tahapan_id' => 2,
                'calon_id' => 88,
                'nilai' => 62.67,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            263 => 
            array (
                'id' => 264,
                'tahapan_id' => 3,
                'calon_id' => 88,
                'nilai' => 61.24,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            264 => 
            array (
                'id' => 265,
                'tahapan_id' => 1,
                'calon_id' => 89,
                'nilai' => 98.83,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            265 => 
            array (
                'id' => 266,
                'tahapan_id' => 2,
                'calon_id' => 89,
                'nilai' => 92.4,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            266 => 
            array (
                'id' => 267,
                'tahapan_id' => 3,
                'calon_id' => 89,
                'nilai' => 40.41,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            267 => 
            array (
                'id' => 268,
                'tahapan_id' => 1,
                'calon_id' => 90,
                'nilai' => 58.48,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            268 => 
            array (
                'id' => 269,
                'tahapan_id' => 2,
                'calon_id' => 90,
                'nilai' => 62.55,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            269 => 
            array (
                'id' => 270,
                'tahapan_id' => 3,
                'calon_id' => 90,
                'nilai' => 91.58,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            270 => 
            array (
                'id' => 271,
                'tahapan_id' => 1,
                'calon_id' => 91,
                'nilai' => 32.37,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            271 => 
            array (
                'id' => 272,
                'tahapan_id' => 2,
                'calon_id' => 91,
                'nilai' => 93.85,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            272 => 
            array (
                'id' => 273,
                'tahapan_id' => 3,
                'calon_id' => 91,
                'nilai' => 41.11,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            273 => 
            array (
                'id' => 274,
                'tahapan_id' => 1,
                'calon_id' => 92,
                'nilai' => 50.0,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            274 => 
            array (
                'id' => 275,
                'tahapan_id' => 2,
                'calon_id' => 92,
                'nilai' => 80.88,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            275 => 
            array (
                'id' => 276,
                'tahapan_id' => 3,
                'calon_id' => 92,
                'nilai' => 49.38,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            276 => 
            array (
                'id' => 277,
                'tahapan_id' => 1,
                'calon_id' => 93,
                'nilai' => 93.11,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            277 => 
            array (
                'id' => 278,
                'tahapan_id' => 2,
                'calon_id' => 93,
                'nilai' => 75.47,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            278 => 
            array (
                'id' => 279,
                'tahapan_id' => 3,
                'calon_id' => 93,
                'nilai' => 52.51,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            279 => 
            array (
                'id' => 280,
                'tahapan_id' => 1,
                'calon_id' => 94,
                'nilai' => 32.06,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            280 => 
            array (
                'id' => 281,
                'tahapan_id' => 2,
                'calon_id' => 94,
                'nilai' => 82.22,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            281 => 
            array (
                'id' => 282,
                'tahapan_id' => 3,
                'calon_id' => 94,
                'nilai' => 46.54,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            282 => 
            array (
                'id' => 283,
                'tahapan_id' => 1,
                'calon_id' => 95,
                'nilai' => 47.72,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            283 => 
            array (
                'id' => 284,
                'tahapan_id' => 2,
                'calon_id' => 95,
                'nilai' => 34.55,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            284 => 
            array (
                'id' => 285,
                'tahapan_id' => 3,
                'calon_id' => 95,
                'nilai' => 69.25,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            285 => 
            array (
                'id' => 286,
                'tahapan_id' => 1,
                'calon_id' => 96,
                'nilai' => 79.82,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            286 => 
            array (
                'id' => 287,
                'tahapan_id' => 2,
                'calon_id' => 96,
                'nilai' => 60.23,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            287 => 
            array (
                'id' => 288,
                'tahapan_id' => 3,
                'calon_id' => 96,
                'nilai' => 68.46,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            288 => 
            array (
                'id' => 289,
                'tahapan_id' => 1,
                'calon_id' => 97,
                'nilai' => 94.11,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            289 => 
            array (
                'id' => 290,
                'tahapan_id' => 2,
                'calon_id' => 97,
                'nilai' => 68.95,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            290 => 
            array (
                'id' => 291,
                'tahapan_id' => 3,
                'calon_id' => 97,
                'nilai' => 87.81,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            291 => 
            array (
                'id' => 292,
                'tahapan_id' => 1,
                'calon_id' => 98,
                'nilai' => 92.35,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            292 => 
            array (
                'id' => 293,
                'tahapan_id' => 2,
                'calon_id' => 98,
                'nilai' => 26.73,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            293 => 
            array (
                'id' => 294,
                'tahapan_id' => 3,
                'calon_id' => 98,
                'nilai' => 61.34,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            294 => 
            array (
                'id' => 295,
                'tahapan_id' => 1,
                'calon_id' => 99,
                'nilai' => 72.5,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            295 => 
            array (
                'id' => 296,
                'tahapan_id' => 2,
                'calon_id' => 99,
                'nilai' => 81.27,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            296 => 
            array (
                'id' => 297,
                'tahapan_id' => 3,
                'calon_id' => 99,
                'nilai' => 83.17,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            297 => 
            array (
                'id' => 298,
                'tahapan_id' => 1,
                'calon_id' => 100,
                'nilai' => 95.99,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            298 => 
            array (
                'id' => 299,
                'tahapan_id' => 2,
                'calon_id' => 100,
                'nilai' => 90.99,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            299 => 
            array (
                'id' => 300,
                'tahapan_id' => 3,
                'calon_id' => 100,
                'nilai' => 47.17,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            300 => 
            array (
                'id' => 301,
                'tahapan_id' => 1,
                'calon_id' => 101,
                'nilai' => 71.49,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            301 => 
            array (
                'id' => 302,
                'tahapan_id' => 2,
                'calon_id' => 101,
                'nilai' => 92.36,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            302 => 
            array (
                'id' => 303,
                'tahapan_id' => 3,
                'calon_id' => 101,
                'nilai' => 31.49,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            303 => 
            array (
                'id' => 304,
                'tahapan_id' => 1,
                'calon_id' => 102,
                'nilai' => 37.67,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            304 => 
            array (
                'id' => 305,
                'tahapan_id' => 2,
                'calon_id' => 102,
                'nilai' => 92.39,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            305 => 
            array (
                'id' => 306,
                'tahapan_id' => 3,
                'calon_id' => 102,
                'nilai' => 86.06,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            306 => 
            array (
                'id' => 307,
                'tahapan_id' => 1,
                'calon_id' => 103,
                'nilai' => 82.2,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            307 => 
            array (
                'id' => 308,
                'tahapan_id' => 2,
                'calon_id' => 103,
                'nilai' => 36.63,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            308 => 
            array (
                'id' => 309,
                'tahapan_id' => 3,
                'calon_id' => 103,
                'nilai' => 56.62,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            309 => 
            array (
                'id' => 310,
                'tahapan_id' => 1,
                'calon_id' => 104,
                'nilai' => 99.47,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            310 => 
            array (
                'id' => 311,
                'tahapan_id' => 2,
                'calon_id' => 104,
                'nilai' => 68.33,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            311 => 
            array (
                'id' => 312,
                'tahapan_id' => 3,
                'calon_id' => 104,
                'nilai' => 67.61,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            312 => 
            array (
                'id' => 313,
                'tahapan_id' => 1,
                'calon_id' => 105,
                'nilai' => 68.68,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            313 => 
            array (
                'id' => 314,
                'tahapan_id' => 2,
                'calon_id' => 105,
                'nilai' => 83.37,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            314 => 
            array (
                'id' => 315,
                'tahapan_id' => 3,
                'calon_id' => 105,
                'nilai' => 80.88,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            315 => 
            array (
                'id' => 316,
                'tahapan_id' => 1,
                'calon_id' => 106,
                'nilai' => 71.13,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            316 => 
            array (
                'id' => 317,
                'tahapan_id' => 2,
                'calon_id' => 106,
                'nilai' => 60.41,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            317 => 
            array (
                'id' => 318,
                'tahapan_id' => 3,
                'calon_id' => 106,
                'nilai' => 93.43,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            318 => 
            array (
                'id' => 319,
                'tahapan_id' => 1,
                'calon_id' => 107,
                'nilai' => 48.79,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            319 => 
            array (
                'id' => 320,
                'tahapan_id' => 2,
                'calon_id' => 107,
                'nilai' => 71.65,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            320 => 
            array (
                'id' => 321,
                'tahapan_id' => 3,
                'calon_id' => 107,
                'nilai' => 93.79,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            321 => 
            array (
                'id' => 322,
                'tahapan_id' => 1,
                'calon_id' => 108,
                'nilai' => 82.33,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            322 => 
            array (
                'id' => 323,
                'tahapan_id' => 2,
                'calon_id' => 108,
                'nilai' => 77.88,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            323 => 
            array (
                'id' => 324,
                'tahapan_id' => 3,
                'calon_id' => 108,
                'nilai' => 88.76,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            324 => 
            array (
                'id' => 325,
                'tahapan_id' => 1,
                'calon_id' => 109,
                'nilai' => 96.94,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            325 => 
            array (
                'id' => 326,
                'tahapan_id' => 2,
                'calon_id' => 109,
                'nilai' => 34.78,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            326 => 
            array (
                'id' => 327,
                'tahapan_id' => 3,
                'calon_id' => 109,
                'nilai' => 87.08,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            327 => 
            array (
                'id' => 328,
                'tahapan_id' => 1,
                'calon_id' => 110,
                'nilai' => 47.42,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            328 => 
            array (
                'id' => 329,
                'tahapan_id' => 2,
                'calon_id' => 110,
                'nilai' => 79.77,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            329 => 
            array (
                'id' => 330,
                'tahapan_id' => 3,
                'calon_id' => 110,
                'nilai' => 96.1,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            330 => 
            array (
                'id' => 331,
                'tahapan_id' => 1,
                'calon_id' => 111,
                'nilai' => 79.61,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            331 => 
            array (
                'id' => 332,
                'tahapan_id' => 2,
                'calon_id' => 111,
                'nilai' => 94.63,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            332 => 
            array (
                'id' => 333,
                'tahapan_id' => 3,
                'calon_id' => 111,
                'nilai' => 81.96,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            333 => 
            array (
                'id' => 334,
                'tahapan_id' => 1,
                'calon_id' => 112,
                'nilai' => 84.69,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            334 => 
            array (
                'id' => 335,
                'tahapan_id' => 2,
                'calon_id' => 112,
                'nilai' => 31.92,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            335 => 
            array (
                'id' => 336,
                'tahapan_id' => 3,
                'calon_id' => 112,
                'nilai' => 77.22,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            336 => 
            array (
                'id' => 337,
                'tahapan_id' => 1,
                'calon_id' => 113,
                'nilai' => 69.87,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            337 => 
            array (
                'id' => 338,
                'tahapan_id' => 2,
                'calon_id' => 113,
                'nilai' => 25.89,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            338 => 
            array (
                'id' => 339,
                'tahapan_id' => 3,
                'calon_id' => 113,
                'nilai' => 44.76,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            339 => 
            array (
                'id' => 340,
                'tahapan_id' => 1,
                'calon_id' => 114,
                'nilai' => 50.01,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            340 => 
            array (
                'id' => 341,
                'tahapan_id' => 2,
                'calon_id' => 114,
                'nilai' => 69.65,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            341 => 
            array (
                'id' => 342,
                'tahapan_id' => 3,
                'calon_id' => 114,
                'nilai' => 97.94,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            342 => 
            array (
                'id' => 343,
                'tahapan_id' => 1,
                'calon_id' => 115,
                'nilai' => 93.15,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            343 => 
            array (
                'id' => 344,
                'tahapan_id' => 2,
                'calon_id' => 115,
                'nilai' => 89.6,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            344 => 
            array (
                'id' => 345,
                'tahapan_id' => 3,
                'calon_id' => 115,
                'nilai' => 52.09,
                'created_at' => '2023-05-31 16:52:46',
                'updated_at' => '2023-05-31 16:52:46',
            ),
            345 => 
            array (
                'id' => 346,
                'tahapan_id' => 1,
                'calon_id' => 116,
                'nilai' => 59.95,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            346 => 
            array (
                'id' => 347,
                'tahapan_id' => 2,
                'calon_id' => 116,
                'nilai' => 81.9,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            347 => 
            array (
                'id' => 348,
                'tahapan_id' => 3,
                'calon_id' => 116,
                'nilai' => 67.51,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            348 => 
            array (
                'id' => 349,
                'tahapan_id' => 1,
                'calon_id' => 117,
                'nilai' => 93.43,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            349 => 
            array (
                'id' => 350,
                'tahapan_id' => 2,
                'calon_id' => 117,
                'nilai' => 62.34,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            350 => 
            array (
                'id' => 351,
                'tahapan_id' => 3,
                'calon_id' => 117,
                'nilai' => 69.55,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            351 => 
            array (
                'id' => 352,
                'tahapan_id' => 1,
                'calon_id' => 118,
                'nilai' => 66.08,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            352 => 
            array (
                'id' => 353,
                'tahapan_id' => 2,
                'calon_id' => 118,
                'nilai' => 72.14,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            353 => 
            array (
                'id' => 354,
                'tahapan_id' => 3,
                'calon_id' => 118,
                'nilai' => 43.96,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            354 => 
            array (
                'id' => 355,
                'tahapan_id' => 1,
                'calon_id' => 119,
                'nilai' => 62.42,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            355 => 
            array (
                'id' => 356,
                'tahapan_id' => 2,
                'calon_id' => 119,
                'nilai' => 46.69,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            356 => 
            array (
                'id' => 357,
                'tahapan_id' => 3,
                'calon_id' => 119,
                'nilai' => 74.66,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            357 => 
            array (
                'id' => 358,
                'tahapan_id' => 1,
                'calon_id' => 120,
                'nilai' => 46.61,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            358 => 
            array (
                'id' => 359,
                'tahapan_id' => 2,
                'calon_id' => 120,
                'nilai' => 38.61,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            359 => 
            array (
                'id' => 360,
                'tahapan_id' => 3,
                'calon_id' => 120,
                'nilai' => 50.0,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            360 => 
            array (
                'id' => 361,
                'tahapan_id' => 1,
                'calon_id' => 121,
                'nilai' => 64.23,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            361 => 
            array (
                'id' => 362,
                'tahapan_id' => 2,
                'calon_id' => 121,
                'nilai' => 50.28,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            362 => 
            array (
                'id' => 363,
                'tahapan_id' => 3,
                'calon_id' => 121,
                'nilai' => 97.1,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            363 => 
            array (
                'id' => 364,
                'tahapan_id' => 1,
                'calon_id' => 122,
                'nilai' => 36.39,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            364 => 
            array (
                'id' => 365,
                'tahapan_id' => 2,
                'calon_id' => 122,
                'nilai' => 66.59,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            365 => 
            array (
                'id' => 366,
                'tahapan_id' => 3,
                'calon_id' => 122,
                'nilai' => 45.83,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            366 => 
            array (
                'id' => 367,
                'tahapan_id' => 1,
                'calon_id' => 123,
                'nilai' => 98.04,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            367 => 
            array (
                'id' => 368,
                'tahapan_id' => 2,
                'calon_id' => 123,
                'nilai' => 39.7,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            368 => 
            array (
                'id' => 369,
                'tahapan_id' => 3,
                'calon_id' => 123,
                'nilai' => 89.59,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            369 => 
            array (
                'id' => 370,
                'tahapan_id' => 1,
                'calon_id' => 124,
                'nilai' => 55.84,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            370 => 
            array (
                'id' => 371,
                'tahapan_id' => 2,
                'calon_id' => 124,
                'nilai' => 80.54,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            371 => 
            array (
                'id' => 372,
                'tahapan_id' => 3,
                'calon_id' => 124,
                'nilai' => 53.41,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            372 => 
            array (
                'id' => 373,
                'tahapan_id' => 1,
                'calon_id' => 125,
                'nilai' => 54.06,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            373 => 
            array (
                'id' => 374,
                'tahapan_id' => 2,
                'calon_id' => 125,
                'nilai' => 31.24,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            374 => 
            array (
                'id' => 375,
                'tahapan_id' => 3,
                'calon_id' => 125,
                'nilai' => 45.82,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            375 => 
            array (
                'id' => 376,
                'tahapan_id' => 1,
                'calon_id' => 126,
                'nilai' => 90.47,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            376 => 
            array (
                'id' => 377,
                'tahapan_id' => 2,
                'calon_id' => 126,
                'nilai' => 83.96,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            377 => 
            array (
                'id' => 378,
                'tahapan_id' => 3,
                'calon_id' => 126,
                'nilai' => 95.02,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            378 => 
            array (
                'id' => 379,
                'tahapan_id' => 1,
                'calon_id' => 127,
                'nilai' => 53.05,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            379 => 
            array (
                'id' => 380,
                'tahapan_id' => 2,
                'calon_id' => 127,
                'nilai' => 56.87,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            380 => 
            array (
                'id' => 381,
                'tahapan_id' => 3,
                'calon_id' => 127,
                'nilai' => 91.64,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            381 => 
            array (
                'id' => 382,
                'tahapan_id' => 1,
                'calon_id' => 128,
                'nilai' => 62.21,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            382 => 
            array (
                'id' => 383,
                'tahapan_id' => 2,
                'calon_id' => 128,
                'nilai' => 26.56,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            383 => 
            array (
                'id' => 384,
                'tahapan_id' => 3,
                'calon_id' => 128,
                'nilai' => 28.11,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            384 => 
            array (
                'id' => 385,
                'tahapan_id' => 1,
                'calon_id' => 129,
                'nilai' => 95.7,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            385 => 
            array (
                'id' => 386,
                'tahapan_id' => 2,
                'calon_id' => 129,
                'nilai' => 83.68,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            386 => 
            array (
                'id' => 387,
                'tahapan_id' => 3,
                'calon_id' => 129,
                'nilai' => 89.29,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            387 => 
            array (
                'id' => 388,
                'tahapan_id' => 1,
                'calon_id' => 130,
                'nilai' => 64.26,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            388 => 
            array (
                'id' => 389,
                'tahapan_id' => 2,
                'calon_id' => 130,
                'nilai' => 45.4,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            389 => 
            array (
                'id' => 390,
                'tahapan_id' => 3,
                'calon_id' => 130,
                'nilai' => 30.25,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            390 => 
            array (
                'id' => 391,
                'tahapan_id' => 1,
                'calon_id' => 131,
                'nilai' => 49.77,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            391 => 
            array (
                'id' => 392,
                'tahapan_id' => 2,
                'calon_id' => 131,
                'nilai' => 72.7,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            392 => 
            array (
                'id' => 393,
                'tahapan_id' => 3,
                'calon_id' => 131,
                'nilai' => 73.77,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            393 => 
            array (
                'id' => 394,
                'tahapan_id' => 1,
                'calon_id' => 132,
                'nilai' => 46.64,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            394 => 
            array (
                'id' => 395,
                'tahapan_id' => 2,
                'calon_id' => 132,
                'nilai' => 89.31,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            395 => 
            array (
                'id' => 396,
                'tahapan_id' => 3,
                'calon_id' => 132,
                'nilai' => 59.11,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            396 => 
            array (
                'id' => 397,
                'tahapan_id' => 1,
                'calon_id' => 133,
                'nilai' => 67.01,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            397 => 
            array (
                'id' => 398,
                'tahapan_id' => 2,
                'calon_id' => 133,
                'nilai' => 34.99,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            398 => 
            array (
                'id' => 399,
                'tahapan_id' => 3,
                'calon_id' => 133,
                'nilai' => 69.39,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            399 => 
            array (
                'id' => 400,
                'tahapan_id' => 1,
                'calon_id' => 134,
                'nilai' => 37.16,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            400 => 
            array (
                'id' => 401,
                'tahapan_id' => 2,
                'calon_id' => 134,
                'nilai' => 35.34,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            401 => 
            array (
                'id' => 402,
                'tahapan_id' => 3,
                'calon_id' => 134,
                'nilai' => 88.5,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            402 => 
            array (
                'id' => 403,
                'tahapan_id' => 1,
                'calon_id' => 135,
                'nilai' => 42.16,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            403 => 
            array (
                'id' => 404,
                'tahapan_id' => 2,
                'calon_id' => 135,
                'nilai' => 73.06,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            404 => 
            array (
                'id' => 405,
                'tahapan_id' => 3,
                'calon_id' => 135,
                'nilai' => 66.57,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            405 => 
            array (
                'id' => 406,
                'tahapan_id' => 1,
                'calon_id' => 136,
                'nilai' => 33.21,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            406 => 
            array (
                'id' => 407,
                'tahapan_id' => 2,
                'calon_id' => 136,
                'nilai' => 57.45,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            407 => 
            array (
                'id' => 408,
                'tahapan_id' => 3,
                'calon_id' => 136,
                'nilai' => 74.87,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            408 => 
            array (
                'id' => 409,
                'tahapan_id' => 1,
                'calon_id' => 137,
                'nilai' => 57.86,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            409 => 
            array (
                'id' => 410,
                'tahapan_id' => 2,
                'calon_id' => 137,
                'nilai' => 31.91,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            410 => 
            array (
                'id' => 411,
                'tahapan_id' => 3,
                'calon_id' => 137,
                'nilai' => 70.14,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            411 => 
            array (
                'id' => 412,
                'tahapan_id' => 1,
                'calon_id' => 138,
                'nilai' => 63.44,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            412 => 
            array (
                'id' => 413,
                'tahapan_id' => 2,
                'calon_id' => 138,
                'nilai' => 86.41,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            413 => 
            array (
                'id' => 414,
                'tahapan_id' => 3,
                'calon_id' => 138,
                'nilai' => 70.67,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            414 => 
            array (
                'id' => 415,
                'tahapan_id' => 1,
                'calon_id' => 139,
                'nilai' => 73.52,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            415 => 
            array (
                'id' => 416,
                'tahapan_id' => 2,
                'calon_id' => 139,
                'nilai' => 78.02,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            416 => 
            array (
                'id' => 417,
                'tahapan_id' => 3,
                'calon_id' => 139,
                'nilai' => 28.19,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            417 => 
            array (
                'id' => 418,
                'tahapan_id' => 1,
                'calon_id' => 140,
                'nilai' => 78.43,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            418 => 
            array (
                'id' => 419,
                'tahapan_id' => 2,
                'calon_id' => 140,
                'nilai' => 69.05,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            419 => 
            array (
                'id' => 420,
                'tahapan_id' => 3,
                'calon_id' => 140,
                'nilai' => 37.88,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            420 => 
            array (
                'id' => 421,
                'tahapan_id' => 1,
                'calon_id' => 141,
                'nilai' => 26.27,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            421 => 
            array (
                'id' => 422,
                'tahapan_id' => 2,
                'calon_id' => 141,
                'nilai' => 60.43,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            422 => 
            array (
                'id' => 423,
                'tahapan_id' => 3,
                'calon_id' => 141,
                'nilai' => 43.86,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            423 => 
            array (
                'id' => 424,
                'tahapan_id' => 1,
                'calon_id' => 142,
                'nilai' => 37.25,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            424 => 
            array (
                'id' => 425,
                'tahapan_id' => 2,
                'calon_id' => 142,
                'nilai' => 97.74,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            425 => 
            array (
                'id' => 426,
                'tahapan_id' => 3,
                'calon_id' => 142,
                'nilai' => 44.1,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            426 => 
            array (
                'id' => 427,
                'tahapan_id' => 1,
                'calon_id' => 143,
                'nilai' => 91.84,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            427 => 
            array (
                'id' => 428,
                'tahapan_id' => 2,
                'calon_id' => 143,
                'nilai' => 83.46,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            428 => 
            array (
                'id' => 429,
                'tahapan_id' => 3,
                'calon_id' => 143,
                'nilai' => 31.21,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            429 => 
            array (
                'id' => 430,
                'tahapan_id' => 1,
                'calon_id' => 144,
                'nilai' => 80.31,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            430 => 
            array (
                'id' => 431,
                'tahapan_id' => 2,
                'calon_id' => 144,
                'nilai' => 30.15,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            431 => 
            array (
                'id' => 432,
                'tahapan_id' => 3,
                'calon_id' => 144,
                'nilai' => 49.01,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            432 => 
            array (
                'id' => 433,
                'tahapan_id' => 1,
                'calon_id' => 145,
                'nilai' => 77.45,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            433 => 
            array (
                'id' => 434,
                'tahapan_id' => 2,
                'calon_id' => 145,
                'nilai' => 57.89,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            434 => 
            array (
                'id' => 435,
                'tahapan_id' => 3,
                'calon_id' => 145,
                'nilai' => 60.23,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            435 => 
            array (
                'id' => 436,
                'tahapan_id' => 1,
                'calon_id' => 146,
                'nilai' => 42.83,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            436 => 
            array (
                'id' => 437,
                'tahapan_id' => 2,
                'calon_id' => 146,
                'nilai' => 48.21,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            437 => 
            array (
                'id' => 438,
                'tahapan_id' => 3,
                'calon_id' => 146,
                'nilai' => 81.81,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            438 => 
            array (
                'id' => 439,
                'tahapan_id' => 1,
                'calon_id' => 147,
                'nilai' => 44.99,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            439 => 
            array (
                'id' => 440,
                'tahapan_id' => 2,
                'calon_id' => 147,
                'nilai' => 86.77,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            440 => 
            array (
                'id' => 441,
                'tahapan_id' => 3,
                'calon_id' => 147,
                'nilai' => 73.77,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            441 => 
            array (
                'id' => 442,
                'tahapan_id' => 1,
                'calon_id' => 148,
                'nilai' => 51.38,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            442 => 
            array (
                'id' => 443,
                'tahapan_id' => 2,
                'calon_id' => 148,
                'nilai' => 41.84,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            443 => 
            array (
                'id' => 444,
                'tahapan_id' => 3,
                'calon_id' => 148,
                'nilai' => 68.24,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            444 => 
            array (
                'id' => 445,
                'tahapan_id' => 1,
                'calon_id' => 149,
                'nilai' => 92.53,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            445 => 
            array (
                'id' => 446,
                'tahapan_id' => 2,
                'calon_id' => 149,
                'nilai' => 40.47,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            446 => 
            array (
                'id' => 447,
                'tahapan_id' => 3,
                'calon_id' => 149,
                'nilai' => 86.28,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            447 => 
            array (
                'id' => 448,
                'tahapan_id' => 1,
                'calon_id' => 150,
                'nilai' => 73.7,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            448 => 
            array (
                'id' => 449,
                'tahapan_id' => 2,
                'calon_id' => 150,
                'nilai' => 78.46,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            449 => 
            array (
                'id' => 450,
                'tahapan_id' => 3,
                'calon_id' => 150,
                'nilai' => 83.82,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            450 => 
            array (
                'id' => 451,
                'tahapan_id' => 1,
                'calon_id' => 151,
                'nilai' => 42.57,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            451 => 
            array (
                'id' => 452,
                'tahapan_id' => 2,
                'calon_id' => 151,
                'nilai' => 74.14,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            452 => 
            array (
                'id' => 453,
                'tahapan_id' => 3,
                'calon_id' => 151,
                'nilai' => 32.95,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            453 => 
            array (
                'id' => 454,
                'tahapan_id' => 1,
                'calon_id' => 152,
                'nilai' => 98.98,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            454 => 
            array (
                'id' => 455,
                'tahapan_id' => 2,
                'calon_id' => 152,
                'nilai' => 27.15,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            455 => 
            array (
                'id' => 456,
                'tahapan_id' => 3,
                'calon_id' => 152,
                'nilai' => 52.44,
                'created_at' => '2023-05-31 16:52:47',
                'updated_at' => '2023-05-31 16:52:47',
            ),
            456 => 
            array (
                'id' => 457,
                'tahapan_id' => 1,
                'calon_id' => 153,
                'nilai' => 32.97,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            457 => 
            array (
                'id' => 458,
                'tahapan_id' => 2,
                'calon_id' => 153,
                'nilai' => 29.74,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            458 => 
            array (
                'id' => 459,
                'tahapan_id' => 3,
                'calon_id' => 153,
                'nilai' => 79.21,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            459 => 
            array (
                'id' => 460,
                'tahapan_id' => 1,
                'calon_id' => 154,
                'nilai' => 96.92,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            460 => 
            array (
                'id' => 461,
                'tahapan_id' => 2,
                'calon_id' => 154,
                'nilai' => 85.28,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            461 => 
            array (
                'id' => 462,
                'tahapan_id' => 3,
                'calon_id' => 154,
                'nilai' => 80.56,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            462 => 
            array (
                'id' => 463,
                'tahapan_id' => 1,
                'calon_id' => 155,
                'nilai' => 34.97,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            463 => 
            array (
                'id' => 464,
                'tahapan_id' => 2,
                'calon_id' => 155,
                'nilai' => 45.94,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            464 => 
            array (
                'id' => 465,
                'tahapan_id' => 3,
                'calon_id' => 155,
                'nilai' => 82.87,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            465 => 
            array (
                'id' => 466,
                'tahapan_id' => 1,
                'calon_id' => 156,
                'nilai' => 65.48,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            466 => 
            array (
                'id' => 467,
                'tahapan_id' => 2,
                'calon_id' => 156,
                'nilai' => 61.87,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            467 => 
            array (
                'id' => 468,
                'tahapan_id' => 3,
                'calon_id' => 156,
                'nilai' => 97.43,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            468 => 
            array (
                'id' => 469,
                'tahapan_id' => 1,
                'calon_id' => 157,
                'nilai' => 97.03,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            469 => 
            array (
                'id' => 470,
                'tahapan_id' => 2,
                'calon_id' => 157,
                'nilai' => 74.45,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            470 => 
            array (
                'id' => 471,
                'tahapan_id' => 3,
                'calon_id' => 157,
                'nilai' => 76.88,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            471 => 
            array (
                'id' => 472,
                'tahapan_id' => 1,
                'calon_id' => 158,
                'nilai' => 64.47,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            472 => 
            array (
                'id' => 473,
                'tahapan_id' => 2,
                'calon_id' => 158,
                'nilai' => 85.76,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            473 => 
            array (
                'id' => 474,
                'tahapan_id' => 3,
                'calon_id' => 158,
                'nilai' => 62.72,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            474 => 
            array (
                'id' => 475,
                'tahapan_id' => 1,
                'calon_id' => 159,
                'nilai' => 32.73,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            475 => 
            array (
                'id' => 476,
                'tahapan_id' => 2,
                'calon_id' => 159,
                'nilai' => 95.18,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            476 => 
            array (
                'id' => 477,
                'tahapan_id' => 3,
                'calon_id' => 159,
                'nilai' => 68.91,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            477 => 
            array (
                'id' => 478,
                'tahapan_id' => 1,
                'calon_id' => 160,
                'nilai' => 50.34,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            478 => 
            array (
                'id' => 479,
                'tahapan_id' => 2,
                'calon_id' => 160,
                'nilai' => 83.19,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            479 => 
            array (
                'id' => 480,
                'tahapan_id' => 3,
                'calon_id' => 160,
                'nilai' => 37.25,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            480 => 
            array (
                'id' => 481,
                'tahapan_id' => 1,
                'calon_id' => 161,
                'nilai' => 29.45,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            481 => 
            array (
                'id' => 482,
                'tahapan_id' => 2,
                'calon_id' => 161,
                'nilai' => 70.01,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            482 => 
            array (
                'id' => 483,
                'tahapan_id' => 3,
                'calon_id' => 161,
                'nilai' => 85.11,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            483 => 
            array (
                'id' => 484,
                'tahapan_id' => 1,
                'calon_id' => 162,
                'nilai' => 73.78,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            484 => 
            array (
                'id' => 485,
                'tahapan_id' => 2,
                'calon_id' => 162,
                'nilai' => 34.81,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            485 => 
            array (
                'id' => 486,
                'tahapan_id' => 3,
                'calon_id' => 162,
                'nilai' => 93.02,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            486 => 
            array (
                'id' => 487,
                'tahapan_id' => 1,
                'calon_id' => 163,
                'nilai' => 48.29,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            487 => 
            array (
                'id' => 488,
                'tahapan_id' => 2,
                'calon_id' => 163,
                'nilai' => 61.19,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            488 => 
            array (
                'id' => 489,
                'tahapan_id' => 3,
                'calon_id' => 163,
                'nilai' => 64.06,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            489 => 
            array (
                'id' => 490,
                'tahapan_id' => 1,
                'calon_id' => 164,
                'nilai' => 95.06,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            490 => 
            array (
                'id' => 491,
                'tahapan_id' => 2,
                'calon_id' => 164,
                'nilai' => 58.87,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            491 => 
            array (
                'id' => 492,
                'tahapan_id' => 3,
                'calon_id' => 164,
                'nilai' => 71.88,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            492 => 
            array (
                'id' => 493,
                'tahapan_id' => 1,
                'calon_id' => 165,
                'nilai' => 60.54,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            493 => 
            array (
                'id' => 494,
                'tahapan_id' => 2,
                'calon_id' => 165,
                'nilai' => 54.75,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            494 => 
            array (
                'id' => 495,
                'tahapan_id' => 3,
                'calon_id' => 165,
                'nilai' => 98.24,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            495 => 
            array (
                'id' => 496,
                'tahapan_id' => 1,
                'calon_id' => 166,
                'nilai' => 47.68,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            496 => 
            array (
                'id' => 497,
                'tahapan_id' => 2,
                'calon_id' => 166,
                'nilai' => 66.93,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            497 => 
            array (
                'id' => 498,
                'tahapan_id' => 3,
                'calon_id' => 166,
                'nilai' => 69.29,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            498 => 
            array (
                'id' => 499,
                'tahapan_id' => 1,
                'calon_id' => 167,
                'nilai' => 38.0,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            499 => 
            array (
                'id' => 500,
                'tahapan_id' => 2,
                'calon_id' => 167,
                'nilai' => 46.85,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
        ));
        \DB::table('calon_nilai')->insert(array (
            0 => 
            array (
                'id' => 501,
                'tahapan_id' => 3,
                'calon_id' => 167,
                'nilai' => 61.38,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            1 => 
            array (
                'id' => 502,
                'tahapan_id' => 1,
                'calon_id' => 168,
                'nilai' => 76.21,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            2 => 
            array (
                'id' => 503,
                'tahapan_id' => 2,
                'calon_id' => 168,
                'nilai' => 42.58,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            3 => 
            array (
                'id' => 504,
                'tahapan_id' => 3,
                'calon_id' => 168,
                'nilai' => 30.86,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            4 => 
            array (
                'id' => 505,
                'tahapan_id' => 1,
                'calon_id' => 169,
                'nilai' => 63.91,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            5 => 
            array (
                'id' => 506,
                'tahapan_id' => 2,
                'calon_id' => 169,
                'nilai' => 57.35,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            6 => 
            array (
                'id' => 507,
                'tahapan_id' => 3,
                'calon_id' => 169,
                'nilai' => 63.74,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            7 => 
            array (
                'id' => 508,
                'tahapan_id' => 1,
                'calon_id' => 170,
                'nilai' => 38.66,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            8 => 
            array (
                'id' => 509,
                'tahapan_id' => 2,
                'calon_id' => 170,
                'nilai' => 41.97,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            9 => 
            array (
                'id' => 510,
                'tahapan_id' => 3,
                'calon_id' => 170,
                'nilai' => 74.81,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            10 => 
            array (
                'id' => 511,
                'tahapan_id' => 1,
                'calon_id' => 171,
                'nilai' => 62.17,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            11 => 
            array (
                'id' => 512,
                'tahapan_id' => 2,
                'calon_id' => 171,
                'nilai' => 51.16,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            12 => 
            array (
                'id' => 513,
                'tahapan_id' => 3,
                'calon_id' => 171,
                'nilai' => 84.08,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            13 => 
            array (
                'id' => 514,
                'tahapan_id' => 1,
                'calon_id' => 172,
                'nilai' => 67.29,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            14 => 
            array (
                'id' => 515,
                'tahapan_id' => 2,
                'calon_id' => 172,
                'nilai' => 39.48,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            15 => 
            array (
                'id' => 516,
                'tahapan_id' => 3,
                'calon_id' => 172,
                'nilai' => 98.04,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            16 => 
            array (
                'id' => 517,
                'tahapan_id' => 1,
                'calon_id' => 173,
                'nilai' => 37.78,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            17 => 
            array (
                'id' => 518,
                'tahapan_id' => 2,
                'calon_id' => 173,
                'nilai' => 40.91,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            18 => 
            array (
                'id' => 519,
                'tahapan_id' => 3,
                'calon_id' => 173,
                'nilai' => 71.85,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            19 => 
            array (
                'id' => 520,
                'tahapan_id' => 1,
                'calon_id' => 174,
                'nilai' => 91.19,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            20 => 
            array (
                'id' => 521,
                'tahapan_id' => 2,
                'calon_id' => 174,
                'nilai' => 57.95,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            21 => 
            array (
                'id' => 522,
                'tahapan_id' => 3,
                'calon_id' => 174,
                'nilai' => 56.31,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            22 => 
            array (
                'id' => 523,
                'tahapan_id' => 1,
                'calon_id' => 175,
                'nilai' => 98.67,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            23 => 
            array (
                'id' => 524,
                'tahapan_id' => 2,
                'calon_id' => 175,
                'nilai' => 34.39,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            24 => 
            array (
                'id' => 525,
                'tahapan_id' => 3,
                'calon_id' => 175,
                'nilai' => 75.69,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            25 => 
            array (
                'id' => 526,
                'tahapan_id' => 1,
                'calon_id' => 176,
                'nilai' => 90.86,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            26 => 
            array (
                'id' => 527,
                'tahapan_id' => 2,
                'calon_id' => 176,
                'nilai' => 80.59,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            27 => 
            array (
                'id' => 528,
                'tahapan_id' => 3,
                'calon_id' => 176,
                'nilai' => 74.28,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            28 => 
            array (
                'id' => 529,
                'tahapan_id' => 1,
                'calon_id' => 177,
                'nilai' => 40.26,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            29 => 
            array (
                'id' => 530,
                'tahapan_id' => 2,
                'calon_id' => 177,
                'nilai' => 34.99,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            30 => 
            array (
                'id' => 531,
                'tahapan_id' => 3,
                'calon_id' => 177,
                'nilai' => 70.18,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            31 => 
            array (
                'id' => 532,
                'tahapan_id' => 1,
                'calon_id' => 178,
                'nilai' => 25.5,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            32 => 
            array (
                'id' => 533,
                'tahapan_id' => 2,
                'calon_id' => 178,
                'nilai' => 29.78,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            33 => 
            array (
                'id' => 534,
                'tahapan_id' => 3,
                'calon_id' => 178,
                'nilai' => 94.03,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            34 => 
            array (
                'id' => 535,
                'tahapan_id' => 1,
                'calon_id' => 179,
                'nilai' => 43.53,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            35 => 
            array (
                'id' => 536,
                'tahapan_id' => 2,
                'calon_id' => 179,
                'nilai' => 27.62,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            36 => 
            array (
                'id' => 537,
                'tahapan_id' => 3,
                'calon_id' => 179,
                'nilai' => 72.38,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            37 => 
            array (
                'id' => 538,
                'tahapan_id' => 1,
                'calon_id' => 180,
                'nilai' => 94.3,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            38 => 
            array (
                'id' => 539,
                'tahapan_id' => 2,
                'calon_id' => 180,
                'nilai' => 56.97,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            39 => 
            array (
                'id' => 540,
                'tahapan_id' => 3,
                'calon_id' => 180,
                'nilai' => 38.63,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            40 => 
            array (
                'id' => 541,
                'tahapan_id' => 1,
                'calon_id' => 181,
                'nilai' => 91.07,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            41 => 
            array (
                'id' => 542,
                'tahapan_id' => 2,
                'calon_id' => 181,
                'nilai' => 65.61,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            42 => 
            array (
                'id' => 543,
                'tahapan_id' => 3,
                'calon_id' => 181,
                'nilai' => 56.31,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            43 => 
            array (
                'id' => 544,
                'tahapan_id' => 1,
                'calon_id' => 182,
                'nilai' => 80.07,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            44 => 
            array (
                'id' => 545,
                'tahapan_id' => 2,
                'calon_id' => 182,
                'nilai' => 66.09,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            45 => 
            array (
                'id' => 546,
                'tahapan_id' => 3,
                'calon_id' => 182,
                'nilai' => 68.42,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            46 => 
            array (
                'id' => 547,
                'tahapan_id' => 1,
                'calon_id' => 183,
                'nilai' => 66.34,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            47 => 
            array (
                'id' => 548,
                'tahapan_id' => 2,
                'calon_id' => 183,
                'nilai' => 54.08,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            48 => 
            array (
                'id' => 549,
                'tahapan_id' => 3,
                'calon_id' => 183,
                'nilai' => 37.86,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            49 => 
            array (
                'id' => 550,
                'tahapan_id' => 1,
                'calon_id' => 184,
                'nilai' => 46.39,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            50 => 
            array (
                'id' => 551,
                'tahapan_id' => 2,
                'calon_id' => 184,
                'nilai' => 53.7,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            51 => 
            array (
                'id' => 552,
                'tahapan_id' => 3,
                'calon_id' => 184,
                'nilai' => 85.93,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            52 => 
            array (
                'id' => 553,
                'tahapan_id' => 1,
                'calon_id' => 185,
                'nilai' => 61.79,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            53 => 
            array (
                'id' => 554,
                'tahapan_id' => 2,
                'calon_id' => 185,
                'nilai' => 34.67,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            54 => 
            array (
                'id' => 555,
                'tahapan_id' => 3,
                'calon_id' => 185,
                'nilai' => 41.33,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            55 => 
            array (
                'id' => 556,
                'tahapan_id' => 1,
                'calon_id' => 186,
                'nilai' => 44.93,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            56 => 
            array (
                'id' => 557,
                'tahapan_id' => 2,
                'calon_id' => 186,
                'nilai' => 59.39,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            57 => 
            array (
                'id' => 558,
                'tahapan_id' => 3,
                'calon_id' => 186,
                'nilai' => 72.94,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            58 => 
            array (
                'id' => 559,
                'tahapan_id' => 1,
                'calon_id' => 187,
                'nilai' => 56.4,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            59 => 
            array (
                'id' => 560,
                'tahapan_id' => 2,
                'calon_id' => 187,
                'nilai' => 56.99,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            60 => 
            array (
                'id' => 561,
                'tahapan_id' => 3,
                'calon_id' => 187,
                'nilai' => 99.93,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            61 => 
            array (
                'id' => 562,
                'tahapan_id' => 1,
                'calon_id' => 188,
                'nilai' => 76.03,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            62 => 
            array (
                'id' => 563,
                'tahapan_id' => 2,
                'calon_id' => 188,
                'nilai' => 30.69,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            63 => 
            array (
                'id' => 564,
                'tahapan_id' => 3,
                'calon_id' => 188,
                'nilai' => 47.0,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            64 => 
            array (
                'id' => 565,
                'tahapan_id' => 1,
                'calon_id' => 189,
                'nilai' => 99.98,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            65 => 
            array (
                'id' => 566,
                'tahapan_id' => 2,
                'calon_id' => 189,
                'nilai' => 53.09,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            66 => 
            array (
                'id' => 567,
                'tahapan_id' => 3,
                'calon_id' => 189,
                'nilai' => 42.55,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            67 => 
            array (
                'id' => 568,
                'tahapan_id' => 1,
                'calon_id' => 190,
                'nilai' => 52.1,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            68 => 
            array (
                'id' => 569,
                'tahapan_id' => 2,
                'calon_id' => 190,
                'nilai' => 72.72,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            69 => 
            array (
                'id' => 570,
                'tahapan_id' => 3,
                'calon_id' => 190,
                'nilai' => 38.68,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            70 => 
            array (
                'id' => 571,
                'tahapan_id' => 1,
                'calon_id' => 191,
                'nilai' => 80.59,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            71 => 
            array (
                'id' => 572,
                'tahapan_id' => 2,
                'calon_id' => 191,
                'nilai' => 33.11,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            72 => 
            array (
                'id' => 573,
                'tahapan_id' => 3,
                'calon_id' => 191,
                'nilai' => 75.86,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            73 => 
            array (
                'id' => 574,
                'tahapan_id' => 1,
                'calon_id' => 192,
                'nilai' => 77.52,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            74 => 
            array (
                'id' => 575,
                'tahapan_id' => 2,
                'calon_id' => 192,
                'nilai' => 82.3,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            75 => 
            array (
                'id' => 576,
                'tahapan_id' => 3,
                'calon_id' => 192,
                'nilai' => 99.45,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            76 => 
            array (
                'id' => 577,
                'tahapan_id' => 1,
                'calon_id' => 193,
                'nilai' => 47.19,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            77 => 
            array (
                'id' => 578,
                'tahapan_id' => 2,
                'calon_id' => 193,
                'nilai' => 75.42,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            78 => 
            array (
                'id' => 579,
                'tahapan_id' => 3,
                'calon_id' => 193,
                'nilai' => 45.03,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            79 => 
            array (
                'id' => 580,
                'tahapan_id' => 1,
                'calon_id' => 194,
                'nilai' => 30.82,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            80 => 
            array (
                'id' => 581,
                'tahapan_id' => 2,
                'calon_id' => 194,
                'nilai' => 66.91,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            81 => 
            array (
                'id' => 582,
                'tahapan_id' => 3,
                'calon_id' => 194,
                'nilai' => 87.79,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            82 => 
            array (
                'id' => 583,
                'tahapan_id' => 1,
                'calon_id' => 195,
                'nilai' => 80.06,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            83 => 
            array (
                'id' => 584,
                'tahapan_id' => 2,
                'calon_id' => 195,
                'nilai' => 34.65,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            84 => 
            array (
                'id' => 585,
                'tahapan_id' => 3,
                'calon_id' => 195,
                'nilai' => 49.7,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            85 => 
            array (
                'id' => 586,
                'tahapan_id' => 1,
                'calon_id' => 196,
                'nilai' => 34.87,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            86 => 
            array (
                'id' => 587,
                'tahapan_id' => 2,
                'calon_id' => 196,
                'nilai' => 60.16,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            87 => 
            array (
                'id' => 588,
                'tahapan_id' => 3,
                'calon_id' => 196,
                'nilai' => 53.52,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            88 => 
            array (
                'id' => 589,
                'tahapan_id' => 1,
                'calon_id' => 197,
                'nilai' => 31.35,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            89 => 
            array (
                'id' => 590,
                'tahapan_id' => 2,
                'calon_id' => 197,
                'nilai' => 33.24,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            90 => 
            array (
                'id' => 591,
                'tahapan_id' => 3,
                'calon_id' => 197,
                'nilai' => 78.78,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            91 => 
            array (
                'id' => 592,
                'tahapan_id' => 1,
                'calon_id' => 198,
                'nilai' => 35.06,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            92 => 
            array (
                'id' => 593,
                'tahapan_id' => 2,
                'calon_id' => 198,
                'nilai' => 72.29,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            93 => 
            array (
                'id' => 594,
                'tahapan_id' => 3,
                'calon_id' => 198,
                'nilai' => 34.4,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            94 => 
            array (
                'id' => 595,
                'tahapan_id' => 1,
                'calon_id' => 199,
                'nilai' => 48.84,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            95 => 
            array (
                'id' => 596,
                'tahapan_id' => 2,
                'calon_id' => 199,
                'nilai' => 74.98,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            96 => 
            array (
                'id' => 597,
                'tahapan_id' => 3,
                'calon_id' => 199,
                'nilai' => 69.65,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            97 => 
            array (
                'id' => 598,
                'tahapan_id' => 1,
                'calon_id' => 200,
                'nilai' => 99.44,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            98 => 
            array (
                'id' => 599,
                'tahapan_id' => 2,
                'calon_id' => 200,
                'nilai' => 53.63,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            99 => 
            array (
                'id' => 600,
                'tahapan_id' => 3,
                'calon_id' => 200,
                'nilai' => 95.13,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            100 => 
            array (
                'id' => 601,
                'tahapan_id' => 1,
                'calon_id' => 201,
                'nilai' => 73.54,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            101 => 
            array (
                'id' => 602,
                'tahapan_id' => 2,
                'calon_id' => 201,
                'nilai' => 37.7,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            102 => 
            array (
                'id' => 603,
                'tahapan_id' => 3,
                'calon_id' => 201,
                'nilai' => 45.34,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            103 => 
            array (
                'id' => 604,
                'tahapan_id' => 1,
                'calon_id' => 202,
                'nilai' => 59.38,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            104 => 
            array (
                'id' => 605,
                'tahapan_id' => 2,
                'calon_id' => 202,
                'nilai' => 60.15,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            105 => 
            array (
                'id' => 606,
                'tahapan_id' => 3,
                'calon_id' => 202,
                'nilai' => 98.09,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            106 => 
            array (
                'id' => 607,
                'tahapan_id' => 1,
                'calon_id' => 203,
                'nilai' => 79.86,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            107 => 
            array (
                'id' => 608,
                'tahapan_id' => 2,
                'calon_id' => 203,
                'nilai' => 90.15,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            108 => 
            array (
                'id' => 609,
                'tahapan_id' => 3,
                'calon_id' => 203,
                'nilai' => 79.44,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            109 => 
            array (
                'id' => 610,
                'tahapan_id' => 1,
                'calon_id' => 204,
                'nilai' => 76.0,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            110 => 
            array (
                'id' => 611,
                'tahapan_id' => 2,
                'calon_id' => 204,
                'nilai' => 73.28,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            111 => 
            array (
                'id' => 612,
                'tahapan_id' => 3,
                'calon_id' => 204,
                'nilai' => 78.44,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            112 => 
            array (
                'id' => 613,
                'tahapan_id' => 1,
                'calon_id' => 205,
                'nilai' => 90.23,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            113 => 
            array (
                'id' => 614,
                'tahapan_id' => 2,
                'calon_id' => 205,
                'nilai' => 92.91,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            114 => 
            array (
                'id' => 615,
                'tahapan_id' => 3,
                'calon_id' => 205,
                'nilai' => 30.68,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            115 => 
            array (
                'id' => 616,
                'tahapan_id' => 1,
                'calon_id' => 206,
                'nilai' => 54.13,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            116 => 
            array (
                'id' => 617,
                'tahapan_id' => 2,
                'calon_id' => 206,
                'nilai' => 33.34,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            117 => 
            array (
                'id' => 618,
                'tahapan_id' => 3,
                'calon_id' => 206,
                'nilai' => 76.37,
                'created_at' => '2023-05-31 16:52:48',
                'updated_at' => '2023-05-31 16:52:48',
            ),
            118 => 
            array (
                'id' => 619,
                'tahapan_id' => 1,
                'calon_id' => 207,
                'nilai' => 91.38,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            119 => 
            array (
                'id' => 620,
                'tahapan_id' => 2,
                'calon_id' => 207,
                'nilai' => 94.76,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            120 => 
            array (
                'id' => 621,
                'tahapan_id' => 3,
                'calon_id' => 207,
                'nilai' => 26.18,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            121 => 
            array (
                'id' => 622,
                'tahapan_id' => 1,
                'calon_id' => 208,
                'nilai' => 30.67,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            122 => 
            array (
                'id' => 623,
                'tahapan_id' => 2,
                'calon_id' => 208,
                'nilai' => 99.27,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            123 => 
            array (
                'id' => 624,
                'tahapan_id' => 3,
                'calon_id' => 208,
                'nilai' => 43.96,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            124 => 
            array (
                'id' => 625,
                'tahapan_id' => 1,
                'calon_id' => 209,
                'nilai' => 61.27,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            125 => 
            array (
                'id' => 626,
                'tahapan_id' => 2,
                'calon_id' => 209,
                'nilai' => 69.81,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            126 => 
            array (
                'id' => 627,
                'tahapan_id' => 3,
                'calon_id' => 209,
                'nilai' => 97.84,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            127 => 
            array (
                'id' => 628,
                'tahapan_id' => 1,
                'calon_id' => 210,
                'nilai' => 29.2,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            128 => 
            array (
                'id' => 629,
                'tahapan_id' => 2,
                'calon_id' => 210,
                'nilai' => 29.81,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            129 => 
            array (
                'id' => 630,
                'tahapan_id' => 3,
                'calon_id' => 210,
                'nilai' => 72.03,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            130 => 
            array (
                'id' => 631,
                'tahapan_id' => 1,
                'calon_id' => 211,
                'nilai' => 86.55,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            131 => 
            array (
                'id' => 632,
                'tahapan_id' => 2,
                'calon_id' => 211,
                'nilai' => 50.63,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            132 => 
            array (
                'id' => 633,
                'tahapan_id' => 3,
                'calon_id' => 211,
                'nilai' => 44.84,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            133 => 
            array (
                'id' => 634,
                'tahapan_id' => 1,
                'calon_id' => 212,
                'nilai' => 41.8,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            134 => 
            array (
                'id' => 635,
                'tahapan_id' => 2,
                'calon_id' => 212,
                'nilai' => 34.29,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            135 => 
            array (
                'id' => 636,
                'tahapan_id' => 3,
                'calon_id' => 212,
                'nilai' => 55.24,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            136 => 
            array (
                'id' => 637,
                'tahapan_id' => 1,
                'calon_id' => 213,
                'nilai' => 60.54,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            137 => 
            array (
                'id' => 638,
                'tahapan_id' => 2,
                'calon_id' => 213,
                'nilai' => 78.06,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            138 => 
            array (
                'id' => 639,
                'tahapan_id' => 3,
                'calon_id' => 213,
                'nilai' => 51.41,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            139 => 
            array (
                'id' => 640,
                'tahapan_id' => 1,
                'calon_id' => 214,
                'nilai' => 51.4,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            140 => 
            array (
                'id' => 641,
                'tahapan_id' => 2,
                'calon_id' => 214,
                'nilai' => 61.91,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            141 => 
            array (
                'id' => 642,
                'tahapan_id' => 3,
                'calon_id' => 214,
                'nilai' => 64.26,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            142 => 
            array (
                'id' => 643,
                'tahapan_id' => 1,
                'calon_id' => 215,
                'nilai' => 96.65,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            143 => 
            array (
                'id' => 644,
                'tahapan_id' => 2,
                'calon_id' => 215,
                'nilai' => 54.86,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            144 => 
            array (
                'id' => 645,
                'tahapan_id' => 3,
                'calon_id' => 215,
                'nilai' => 69.48,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            145 => 
            array (
                'id' => 646,
                'tahapan_id' => 1,
                'calon_id' => 216,
                'nilai' => 34.03,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            146 => 
            array (
                'id' => 647,
                'tahapan_id' => 2,
                'calon_id' => 216,
                'nilai' => 47.85,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            147 => 
            array (
                'id' => 648,
                'tahapan_id' => 3,
                'calon_id' => 216,
                'nilai' => 29.1,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            148 => 
            array (
                'id' => 649,
                'tahapan_id' => 1,
                'calon_id' => 217,
                'nilai' => 72.84,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            149 => 
            array (
                'id' => 650,
                'tahapan_id' => 2,
                'calon_id' => 217,
                'nilai' => 68.2,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            150 => 
            array (
                'id' => 651,
                'tahapan_id' => 3,
                'calon_id' => 217,
                'nilai' => 63.73,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            151 => 
            array (
                'id' => 652,
                'tahapan_id' => 1,
                'calon_id' => 218,
                'nilai' => 30.9,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            152 => 
            array (
                'id' => 653,
                'tahapan_id' => 2,
                'calon_id' => 218,
                'nilai' => 52.73,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            153 => 
            array (
                'id' => 654,
                'tahapan_id' => 3,
                'calon_id' => 218,
                'nilai' => 60.57,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            154 => 
            array (
                'id' => 655,
                'tahapan_id' => 1,
                'calon_id' => 219,
                'nilai' => 41.51,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            155 => 
            array (
                'id' => 656,
                'tahapan_id' => 2,
                'calon_id' => 219,
                'nilai' => 86.52,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            156 => 
            array (
                'id' => 657,
                'tahapan_id' => 3,
                'calon_id' => 219,
                'nilai' => 27.17,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            157 => 
            array (
                'id' => 658,
                'tahapan_id' => 1,
                'calon_id' => 220,
                'nilai' => 27.45,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            158 => 
            array (
                'id' => 659,
                'tahapan_id' => 2,
                'calon_id' => 220,
                'nilai' => 66.37,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            159 => 
            array (
                'id' => 660,
                'tahapan_id' => 3,
                'calon_id' => 220,
                'nilai' => 42.81,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            160 => 
            array (
                'id' => 661,
                'tahapan_id' => 1,
                'calon_id' => 221,
                'nilai' => 57.02,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            161 => 
            array (
                'id' => 662,
                'tahapan_id' => 2,
                'calon_id' => 221,
                'nilai' => 29.08,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            162 => 
            array (
                'id' => 663,
                'tahapan_id' => 3,
                'calon_id' => 221,
                'nilai' => 81.69,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            163 => 
            array (
                'id' => 664,
                'tahapan_id' => 1,
                'calon_id' => 222,
                'nilai' => 83.93,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            164 => 
            array (
                'id' => 665,
                'tahapan_id' => 2,
                'calon_id' => 222,
                'nilai' => 91.47,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            165 => 
            array (
                'id' => 666,
                'tahapan_id' => 3,
                'calon_id' => 222,
                'nilai' => 71.84,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            166 => 
            array (
                'id' => 667,
                'tahapan_id' => 1,
                'calon_id' => 223,
                'nilai' => 34.46,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            167 => 
            array (
                'id' => 668,
                'tahapan_id' => 2,
                'calon_id' => 223,
                'nilai' => 45.61,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            168 => 
            array (
                'id' => 669,
                'tahapan_id' => 3,
                'calon_id' => 223,
                'nilai' => 27.7,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            169 => 
            array (
                'id' => 670,
                'tahapan_id' => 1,
                'calon_id' => 224,
                'nilai' => 30.55,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            170 => 
            array (
                'id' => 671,
                'tahapan_id' => 2,
                'calon_id' => 224,
                'nilai' => 79.54,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            171 => 
            array (
                'id' => 672,
                'tahapan_id' => 3,
                'calon_id' => 224,
                'nilai' => 82.46,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            172 => 
            array (
                'id' => 673,
                'tahapan_id' => 1,
                'calon_id' => 225,
                'nilai' => 47.19,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            173 => 
            array (
                'id' => 674,
                'tahapan_id' => 2,
                'calon_id' => 225,
                'nilai' => 77.94,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            174 => 
            array (
                'id' => 675,
                'tahapan_id' => 3,
                'calon_id' => 225,
                'nilai' => 47.03,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            175 => 
            array (
                'id' => 676,
                'tahapan_id' => 1,
                'calon_id' => 226,
                'nilai' => 55.12,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            176 => 
            array (
                'id' => 677,
                'tahapan_id' => 2,
                'calon_id' => 226,
                'nilai' => 90.44,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            177 => 
            array (
                'id' => 678,
                'tahapan_id' => 3,
                'calon_id' => 226,
                'nilai' => 55.08,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            178 => 
            array (
                'id' => 679,
                'tahapan_id' => 1,
                'calon_id' => 227,
                'nilai' => 92.39,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            179 => 
            array (
                'id' => 680,
                'tahapan_id' => 2,
                'calon_id' => 227,
                'nilai' => 29.69,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            180 => 
            array (
                'id' => 681,
                'tahapan_id' => 3,
                'calon_id' => 227,
                'nilai' => 70.83,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            181 => 
            array (
                'id' => 682,
                'tahapan_id' => 1,
                'calon_id' => 228,
                'nilai' => 58.63,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            182 => 
            array (
                'id' => 683,
                'tahapan_id' => 2,
                'calon_id' => 228,
                'nilai' => 77.0,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            183 => 
            array (
                'id' => 684,
                'tahapan_id' => 3,
                'calon_id' => 228,
                'nilai' => 40.3,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            184 => 
            array (
                'id' => 685,
                'tahapan_id' => 1,
                'calon_id' => 229,
                'nilai' => 79.28,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            185 => 
            array (
                'id' => 686,
                'tahapan_id' => 2,
                'calon_id' => 229,
                'nilai' => 64.6,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            186 => 
            array (
                'id' => 687,
                'tahapan_id' => 3,
                'calon_id' => 229,
                'nilai' => 92.87,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            187 => 
            array (
                'id' => 688,
                'tahapan_id' => 1,
                'calon_id' => 230,
                'nilai' => 81.93,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            188 => 
            array (
                'id' => 689,
                'tahapan_id' => 2,
                'calon_id' => 230,
                'nilai' => 51.71,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            189 => 
            array (
                'id' => 690,
                'tahapan_id' => 3,
                'calon_id' => 230,
                'nilai' => 87.92,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            190 => 
            array (
                'id' => 691,
                'tahapan_id' => 1,
                'calon_id' => 231,
                'nilai' => 33.98,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            191 => 
            array (
                'id' => 692,
                'tahapan_id' => 2,
                'calon_id' => 231,
                'nilai' => 26.04,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            192 => 
            array (
                'id' => 693,
                'tahapan_id' => 3,
                'calon_id' => 231,
                'nilai' => 53.21,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            193 => 
            array (
                'id' => 694,
                'tahapan_id' => 1,
                'calon_id' => 232,
                'nilai' => 33.08,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            194 => 
            array (
                'id' => 695,
                'tahapan_id' => 2,
                'calon_id' => 232,
                'nilai' => 30.88,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            195 => 
            array (
                'id' => 696,
                'tahapan_id' => 3,
                'calon_id' => 232,
                'nilai' => 82.37,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            196 => 
            array (
                'id' => 697,
                'tahapan_id' => 1,
                'calon_id' => 233,
                'nilai' => 67.56,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            197 => 
            array (
                'id' => 698,
                'tahapan_id' => 2,
                'calon_id' => 233,
                'nilai' => 97.0,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            198 => 
            array (
                'id' => 699,
                'tahapan_id' => 3,
                'calon_id' => 233,
                'nilai' => 82.88,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            199 => 
            array (
                'id' => 700,
                'tahapan_id' => 1,
                'calon_id' => 234,
                'nilai' => 76.11,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            200 => 
            array (
                'id' => 701,
                'tahapan_id' => 2,
                'calon_id' => 234,
                'nilai' => 39.03,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            201 => 
            array (
                'id' => 702,
                'tahapan_id' => 3,
                'calon_id' => 234,
                'nilai' => 78.71,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            202 => 
            array (
                'id' => 703,
                'tahapan_id' => 1,
                'calon_id' => 235,
                'nilai' => 63.07,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            203 => 
            array (
                'id' => 704,
                'tahapan_id' => 2,
                'calon_id' => 235,
                'nilai' => 63.14,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            204 => 
            array (
                'id' => 705,
                'tahapan_id' => 3,
                'calon_id' => 235,
                'nilai' => 67.1,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            205 => 
            array (
                'id' => 706,
                'tahapan_id' => 1,
                'calon_id' => 236,
                'nilai' => 71.93,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            206 => 
            array (
                'id' => 707,
                'tahapan_id' => 2,
                'calon_id' => 236,
                'nilai' => 55.85,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            207 => 
            array (
                'id' => 708,
                'tahapan_id' => 3,
                'calon_id' => 236,
                'nilai' => 44.94,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            208 => 
            array (
                'id' => 709,
                'tahapan_id' => 1,
                'calon_id' => 237,
                'nilai' => 53.6,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            209 => 
            array (
                'id' => 710,
                'tahapan_id' => 2,
                'calon_id' => 237,
                'nilai' => 58.67,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            210 => 
            array (
                'id' => 711,
                'tahapan_id' => 3,
                'calon_id' => 237,
                'nilai' => 48.27,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            211 => 
            array (
                'id' => 712,
                'tahapan_id' => 1,
                'calon_id' => 238,
                'nilai' => 29.68,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            212 => 
            array (
                'id' => 713,
                'tahapan_id' => 2,
                'calon_id' => 238,
                'nilai' => 44.56,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            213 => 
            array (
                'id' => 714,
                'tahapan_id' => 3,
                'calon_id' => 238,
                'nilai' => 26.99,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            214 => 
            array (
                'id' => 715,
                'tahapan_id' => 1,
                'calon_id' => 239,
                'nilai' => 35.39,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            215 => 
            array (
                'id' => 716,
                'tahapan_id' => 2,
                'calon_id' => 239,
                'nilai' => 38.78,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            216 => 
            array (
                'id' => 717,
                'tahapan_id' => 3,
                'calon_id' => 239,
                'nilai' => 94.22,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            217 => 
            array (
                'id' => 718,
                'tahapan_id' => 1,
                'calon_id' => 240,
                'nilai' => 75.49,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            218 => 
            array (
                'id' => 719,
                'tahapan_id' => 2,
                'calon_id' => 240,
                'nilai' => 43.18,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            219 => 
            array (
                'id' => 720,
                'tahapan_id' => 3,
                'calon_id' => 240,
                'nilai' => 87.7,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            220 => 
            array (
                'id' => 721,
                'tahapan_id' => 1,
                'calon_id' => 241,
                'nilai' => 89.07,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            221 => 
            array (
                'id' => 722,
                'tahapan_id' => 2,
                'calon_id' => 241,
                'nilai' => 51.25,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            222 => 
            array (
                'id' => 723,
                'tahapan_id' => 3,
                'calon_id' => 241,
                'nilai' => 98.71,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            223 => 
            array (
                'id' => 724,
                'tahapan_id' => 1,
                'calon_id' => 242,
                'nilai' => 55.66,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            224 => 
            array (
                'id' => 725,
                'tahapan_id' => 2,
                'calon_id' => 242,
                'nilai' => 61.49,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            225 => 
            array (
                'id' => 726,
                'tahapan_id' => 3,
                'calon_id' => 242,
                'nilai' => 25.74,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            226 => 
            array (
                'id' => 727,
                'tahapan_id' => 1,
                'calon_id' => 243,
                'nilai' => 71.96,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            227 => 
            array (
                'id' => 728,
                'tahapan_id' => 2,
                'calon_id' => 243,
                'nilai' => 30.29,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            228 => 
            array (
                'id' => 729,
                'tahapan_id' => 3,
                'calon_id' => 243,
                'nilai' => 82.27,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            229 => 
            array (
                'id' => 730,
                'tahapan_id' => 1,
                'calon_id' => 244,
                'nilai' => 92.36,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            230 => 
            array (
                'id' => 731,
                'tahapan_id' => 2,
                'calon_id' => 244,
                'nilai' => 82.64,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            231 => 
            array (
                'id' => 732,
                'tahapan_id' => 3,
                'calon_id' => 244,
                'nilai' => 99.68,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            232 => 
            array (
                'id' => 733,
                'tahapan_id' => 1,
                'calon_id' => 245,
                'nilai' => 62.02,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            233 => 
            array (
                'id' => 734,
                'tahapan_id' => 2,
                'calon_id' => 245,
                'nilai' => 47.87,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            234 => 
            array (
                'id' => 735,
                'tahapan_id' => 3,
                'calon_id' => 245,
                'nilai' => 63.25,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            235 => 
            array (
                'id' => 736,
                'tahapan_id' => 1,
                'calon_id' => 246,
                'nilai' => 50.76,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            236 => 
            array (
                'id' => 737,
                'tahapan_id' => 2,
                'calon_id' => 246,
                'nilai' => 40.9,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            237 => 
            array (
                'id' => 738,
                'tahapan_id' => 3,
                'calon_id' => 246,
                'nilai' => 26.49,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            238 => 
            array (
                'id' => 739,
                'tahapan_id' => 1,
                'calon_id' => 247,
                'nilai' => 86.73,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            239 => 
            array (
                'id' => 740,
                'tahapan_id' => 2,
                'calon_id' => 247,
                'nilai' => 63.41,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            240 => 
            array (
                'id' => 741,
                'tahapan_id' => 3,
                'calon_id' => 247,
                'nilai' => 47.35,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            241 => 
            array (
                'id' => 742,
                'tahapan_id' => 1,
                'calon_id' => 248,
                'nilai' => 76.17,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            242 => 
            array (
                'id' => 743,
                'tahapan_id' => 2,
                'calon_id' => 248,
                'nilai' => 34.76,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            243 => 
            array (
                'id' => 744,
                'tahapan_id' => 3,
                'calon_id' => 248,
                'nilai' => 65.63,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            244 => 
            array (
                'id' => 745,
                'tahapan_id' => 1,
                'calon_id' => 249,
                'nilai' => 66.29,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            245 => 
            array (
                'id' => 746,
                'tahapan_id' => 2,
                'calon_id' => 249,
                'nilai' => 76.98,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            246 => 
            array (
                'id' => 747,
                'tahapan_id' => 3,
                'calon_id' => 249,
                'nilai' => 67.12,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            247 => 
            array (
                'id' => 748,
                'tahapan_id' => 1,
                'calon_id' => 250,
                'nilai' => 52.02,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            248 => 
            array (
                'id' => 749,
                'tahapan_id' => 2,
                'calon_id' => 250,
                'nilai' => 34.86,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            249 => 
            array (
                'id' => 750,
                'tahapan_id' => 3,
                'calon_id' => 250,
                'nilai' => 33.53,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            250 => 
            array (
                'id' => 751,
                'tahapan_id' => 1,
                'calon_id' => 251,
                'nilai' => 94.71,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            251 => 
            array (
                'id' => 752,
                'tahapan_id' => 2,
                'calon_id' => 251,
                'nilai' => 36.49,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            252 => 
            array (
                'id' => 753,
                'tahapan_id' => 3,
                'calon_id' => 251,
                'nilai' => 89.18,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            253 => 
            array (
                'id' => 754,
                'tahapan_id' => 1,
                'calon_id' => 252,
                'nilai' => 62.43,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            254 => 
            array (
                'id' => 755,
                'tahapan_id' => 2,
                'calon_id' => 252,
                'nilai' => 75.1,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            255 => 
            array (
                'id' => 756,
                'tahapan_id' => 3,
                'calon_id' => 252,
                'nilai' => 56.89,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            256 => 
            array (
                'id' => 757,
                'tahapan_id' => 1,
                'calon_id' => 253,
                'nilai' => 63.71,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            257 => 
            array (
                'id' => 758,
                'tahapan_id' => 2,
                'calon_id' => 253,
                'nilai' => 45.63,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            258 => 
            array (
                'id' => 759,
                'tahapan_id' => 3,
                'calon_id' => 253,
                'nilai' => 63.84,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            259 => 
            array (
                'id' => 760,
                'tahapan_id' => 1,
                'calon_id' => 254,
                'nilai' => 51.41,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            260 => 
            array (
                'id' => 761,
                'tahapan_id' => 2,
                'calon_id' => 254,
                'nilai' => 75.89,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            261 => 
            array (
                'id' => 762,
                'tahapan_id' => 3,
                'calon_id' => 254,
                'nilai' => 29.6,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            262 => 
            array (
                'id' => 763,
                'tahapan_id' => 1,
                'calon_id' => 255,
                'nilai' => 92.25,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            263 => 
            array (
                'id' => 764,
                'tahapan_id' => 2,
                'calon_id' => 255,
                'nilai' => 73.37,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            264 => 
            array (
                'id' => 765,
                'tahapan_id' => 3,
                'calon_id' => 255,
                'nilai' => 35.73,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            265 => 
            array (
                'id' => 766,
                'tahapan_id' => 1,
                'calon_id' => 256,
                'nilai' => 36.06,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            266 => 
            array (
                'id' => 767,
                'tahapan_id' => 2,
                'calon_id' => 256,
                'nilai' => 43.01,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            267 => 
            array (
                'id' => 768,
                'tahapan_id' => 3,
                'calon_id' => 256,
                'nilai' => 87.95,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            268 => 
            array (
                'id' => 769,
                'tahapan_id' => 1,
                'calon_id' => 257,
                'nilai' => 38.35,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            269 => 
            array (
                'id' => 770,
                'tahapan_id' => 2,
                'calon_id' => 257,
                'nilai' => 91.13,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            270 => 
            array (
                'id' => 771,
                'tahapan_id' => 3,
                'calon_id' => 257,
                'nilai' => 72.9,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            271 => 
            array (
                'id' => 772,
                'tahapan_id' => 1,
                'calon_id' => 258,
                'nilai' => 83.6,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            272 => 
            array (
                'id' => 773,
                'tahapan_id' => 2,
                'calon_id' => 258,
                'nilai' => 39.16,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            273 => 
            array (
                'id' => 774,
                'tahapan_id' => 3,
                'calon_id' => 258,
                'nilai' => 78.24,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            274 => 
            array (
                'id' => 775,
                'tahapan_id' => 1,
                'calon_id' => 259,
                'nilai' => 77.44,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            275 => 
            array (
                'id' => 776,
                'tahapan_id' => 2,
                'calon_id' => 259,
                'nilai' => 54.32,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            276 => 
            array (
                'id' => 777,
                'tahapan_id' => 3,
                'calon_id' => 259,
                'nilai' => 90.53,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            277 => 
            array (
                'id' => 778,
                'tahapan_id' => 1,
                'calon_id' => 260,
                'nilai' => 75.93,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            278 => 
            array (
                'id' => 779,
                'tahapan_id' => 2,
                'calon_id' => 260,
                'nilai' => 29.75,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            279 => 
            array (
                'id' => 780,
                'tahapan_id' => 3,
                'calon_id' => 260,
                'nilai' => 47.6,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            280 => 
            array (
                'id' => 781,
                'tahapan_id' => 1,
                'calon_id' => 261,
                'nilai' => 62.73,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            281 => 
            array (
                'id' => 782,
                'tahapan_id' => 2,
                'calon_id' => 261,
                'nilai' => 77.33,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            282 => 
            array (
                'id' => 783,
                'tahapan_id' => 3,
                'calon_id' => 261,
                'nilai' => 58.72,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            283 => 
            array (
                'id' => 784,
                'tahapan_id' => 1,
                'calon_id' => 262,
                'nilai' => 74.28,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            284 => 
            array (
                'id' => 785,
                'tahapan_id' => 2,
                'calon_id' => 262,
                'nilai' => 51.48,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            285 => 
            array (
                'id' => 786,
                'tahapan_id' => 3,
                'calon_id' => 262,
                'nilai' => 33.16,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            286 => 
            array (
                'id' => 787,
                'tahapan_id' => 1,
                'calon_id' => 263,
                'nilai' => 38.41,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            287 => 
            array (
                'id' => 788,
                'tahapan_id' => 2,
                'calon_id' => 263,
                'nilai' => 71.3,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            288 => 
            array (
                'id' => 789,
                'tahapan_id' => 3,
                'calon_id' => 263,
                'nilai' => 98.8,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            289 => 
            array (
                'id' => 790,
                'tahapan_id' => 1,
                'calon_id' => 264,
                'nilai' => 85.0,
                'created_at' => '2023-05-31 16:52:49',
                'updated_at' => '2023-05-31 16:52:49',
            ),
            290 => 
            array (
                'id' => 791,
                'tahapan_id' => 2,
                'calon_id' => 264,
                'nilai' => 28.51,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            291 => 
            array (
                'id' => 792,
                'tahapan_id' => 3,
                'calon_id' => 264,
                'nilai' => 71.04,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            292 => 
            array (
                'id' => 793,
                'tahapan_id' => 1,
                'calon_id' => 265,
                'nilai' => 98.62,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            293 => 
            array (
                'id' => 794,
                'tahapan_id' => 2,
                'calon_id' => 265,
                'nilai' => 44.36,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            294 => 
            array (
                'id' => 795,
                'tahapan_id' => 3,
                'calon_id' => 265,
                'nilai' => 53.98,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            295 => 
            array (
                'id' => 796,
                'tahapan_id' => 1,
                'calon_id' => 266,
                'nilai' => 92.96,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            296 => 
            array (
                'id' => 797,
                'tahapan_id' => 2,
                'calon_id' => 266,
                'nilai' => 28.08,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            297 => 
            array (
                'id' => 798,
                'tahapan_id' => 3,
                'calon_id' => 266,
                'nilai' => 38.8,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            298 => 
            array (
                'id' => 799,
                'tahapan_id' => 1,
                'calon_id' => 267,
                'nilai' => 60.32,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            299 => 
            array (
                'id' => 800,
                'tahapan_id' => 2,
                'calon_id' => 267,
                'nilai' => 47.64,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            300 => 
            array (
                'id' => 801,
                'tahapan_id' => 3,
                'calon_id' => 267,
                'nilai' => 79.38,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            301 => 
            array (
                'id' => 802,
                'tahapan_id' => 1,
                'calon_id' => 268,
                'nilai' => 41.57,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            302 => 
            array (
                'id' => 803,
                'tahapan_id' => 2,
                'calon_id' => 268,
                'nilai' => 89.93,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            303 => 
            array (
                'id' => 804,
                'tahapan_id' => 3,
                'calon_id' => 268,
                'nilai' => 93.61,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            304 => 
            array (
                'id' => 805,
                'tahapan_id' => 1,
                'calon_id' => 269,
                'nilai' => 41.98,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            305 => 
            array (
                'id' => 806,
                'tahapan_id' => 2,
                'calon_id' => 269,
                'nilai' => 78.12,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            306 => 
            array (
                'id' => 807,
                'tahapan_id' => 3,
                'calon_id' => 269,
                'nilai' => 52.47,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            307 => 
            array (
                'id' => 808,
                'tahapan_id' => 1,
                'calon_id' => 270,
                'nilai' => 73.68,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            308 => 
            array (
                'id' => 809,
                'tahapan_id' => 2,
                'calon_id' => 270,
                'nilai' => 49.87,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
            309 => 
            array (
                'id' => 810,
                'tahapan_id' => 3,
                'calon_id' => 270,
                'nilai' => 68.63,
                'created_at' => '2023-05-31 16:52:50',
                'updated_at' => '2023-05-31 16:52:50',
            ),
        ));
        
        
    }
}