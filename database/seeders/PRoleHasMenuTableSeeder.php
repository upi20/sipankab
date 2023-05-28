<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_menu')->delete();
        
        \DB::table('p_role_has_menu')->insert(array (
            0 => 
            array (
                'id' => 26,
                'role_id' => 1,
                'menu_id' => 405,
                'created_at' => '2023-01-15 14:52:15',
                'updated_at' => '2023-01-15 14:52:15',
            ),
            1 => 
            array (
                'id' => 27,
                'role_id' => 1,
                'menu_id' => 406,
                'created_at' => '2023-01-15 14:52:44',
                'updated_at' => '2023-01-15 14:52:44',
            ),
            2 => 
            array (
                'id' => 48,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2023-01-17 21:46:07',
                'updated_at' => '2023-01-17 21:46:07',
            ),
            3 => 
            array (
                'id' => 49,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2023-01-17 21:46:13',
                'updated_at' => '2023-01-17 21:46:13',
            ),
            4 => 
            array (
                'id' => 50,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2023-01-17 21:46:58',
                'updated_at' => '2023-01-17 21:46:58',
            ),
            5 => 
            array (
                'id' => 51,
                'role_id' => 9,
                'menu_id' => 386,
                'created_at' => '2023-01-17 21:46:58',
                'updated_at' => '2023-01-17 21:46:58',
            ),
            6 => 
            array (
                'id' => 65,
                'role_id' => 1,
                'menu_id' => 352,
                'created_at' => '2023-01-22 17:12:43',
                'updated_at' => '2023-01-22 17:12:43',
            ),
            7 => 
            array (
                'id' => 66,
                'role_id' => 9,
                'menu_id' => 352,
                'created_at' => '2023-01-22 17:12:43',
                'updated_at' => '2023-01-22 17:12:43',
            ),
            8 => 
            array (
                'id' => 75,
                'role_id' => 1,
                'menu_id' => 363,
                'created_at' => '2023-01-22 17:13:20',
                'updated_at' => '2023-01-22 17:13:20',
            ),
            9 => 
            array (
                'id' => 76,
                'role_id' => 9,
                'menu_id' => 363,
                'created_at' => '2023-01-22 17:13:20',
                'updated_at' => '2023-01-22 17:13:20',
            ),
            10 => 
            array (
                'id' => 79,
                'role_id' => 1,
                'menu_id' => 407,
                'created_at' => '2023-01-22 17:13:44',
                'updated_at' => '2023-01-22 17:13:44',
            ),
            11 => 
            array (
                'id' => 80,
                'role_id' => 9,
                'menu_id' => 407,
                'created_at' => '2023-01-22 17:13:44',
                'updated_at' => '2023-01-22 17:13:44',
            ),
            12 => 
            array (
                'id' => 81,
                'role_id' => 1,
                'menu_id' => 409,
                'created_at' => '2023-01-22 17:13:48',
                'updated_at' => '2023-01-22 17:13:48',
            ),
            13 => 
            array (
                'id' => 82,
                'role_id' => 9,
                'menu_id' => 409,
                'created_at' => '2023-01-22 17:13:48',
                'updated_at' => '2023-01-22 17:13:48',
            ),
            14 => 
            array (
                'id' => 83,
                'role_id' => 1,
                'menu_id' => 408,
                'created_at' => '2023-01-22 17:13:56',
                'updated_at' => '2023-01-22 17:13:56',
            ),
            15 => 
            array (
                'id' => 84,
                'role_id' => 9,
                'menu_id' => 408,
                'created_at' => '2023-01-22 17:13:56',
                'updated_at' => '2023-01-22 17:13:56',
            ),
            16 => 
            array (
                'id' => 98,
                'role_id' => 1,
                'menu_id' => 402,
                'created_at' => '2023-01-22 17:14:47',
                'updated_at' => '2023-01-22 17:14:47',
            ),
            17 => 
            array (
                'id' => 99,
                'role_id' => 9,
                'menu_id' => 402,
                'created_at' => '2023-01-22 17:14:47',
                'updated_at' => '2023-01-22 17:14:47',
            ),
            18 => 
            array (
                'id' => 100,
                'role_id' => 1,
                'menu_id' => 394,
                'created_at' => '2023-01-22 17:14:55',
                'updated_at' => '2023-01-22 17:14:55',
            ),
            19 => 
            array (
                'id' => 101,
                'role_id' => 9,
                'menu_id' => 394,
                'created_at' => '2023-01-22 17:14:55',
                'updated_at' => '2023-01-22 17:14:55',
            ),
            20 => 
            array (
                'id' => 106,
                'role_id' => 1,
                'menu_id' => 353,
                'created_at' => '2023-01-22 18:04:22',
                'updated_at' => '2023-01-22 18:04:22',
            ),
            21 => 
            array (
                'id' => 107,
                'role_id' => 9,
                'menu_id' => 353,
                'created_at' => '2023-01-22 18:04:22',
                'updated_at' => '2023-01-22 18:04:22',
            ),
            22 => 
            array (
                'id' => 108,
                'role_id' => 1,
                'menu_id' => 354,
                'created_at' => '2023-01-22 18:04:27',
                'updated_at' => '2023-01-22 18:04:27',
            ),
            23 => 
            array (
                'id' => 109,
                'role_id' => 9,
                'menu_id' => 354,
                'created_at' => '2023-01-22 18:04:27',
                'updated_at' => '2023-01-22 18:04:27',
            ),
            24 => 
            array (
                'id' => 135,
                'role_id' => 1,
                'menu_id' => 414,
                'created_at' => '2023-03-10 13:31:14',
                'updated_at' => '2023-03-10 13:31:14',
            ),
            25 => 
            array (
                'id' => 136,
                'role_id' => 9,
                'menu_id' => 414,
                'created_at' => '2023-03-10 13:31:14',
                'updated_at' => '2023-03-10 13:31:14',
            ),
            26 => 
            array (
                'id' => 149,
                'role_id' => 1,
                'menu_id' => 421,
                'created_at' => '2023-03-24 23:53:51',
                'updated_at' => '2023-03-24 23:53:51',
            ),
            27 => 
            array (
                'id' => 150,
                'role_id' => 9,
                'menu_id' => 421,
                'created_at' => '2023-03-24 23:53:51',
                'updated_at' => '2023-03-24 23:53:51',
            ),
            28 => 
            array (
                'id' => 155,
                'role_id' => 1,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            29 => 
            array (
                'id' => 156,
                'role_id' => 9,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            30 => 
            array (
                'id' => 157,
                'role_id' => 1,
                'menu_id' => 399,
                'created_at' => '2023-03-25 00:10:18',
                'updated_at' => '2023-03-25 00:10:18',
            ),
            31 => 
            array (
                'id' => 158,
                'role_id' => 9,
                'menu_id' => 399,
                'created_at' => '2023-03-25 00:10:18',
                'updated_at' => '2023-03-25 00:10:18',
            ),
            32 => 
            array (
                'id' => 192,
                'role_id' => 1,
                'menu_id' => 419,
                'created_at' => '2023-04-12 23:57:45',
                'updated_at' => '2023-04-12 23:57:45',
            ),
            33 => 
            array (
                'id' => 193,
                'role_id' => 9,
                'menu_id' => 419,
                'created_at' => '2023-04-12 23:57:45',
                'updated_at' => '2023-04-12 23:57:45',
            ),
            34 => 
            array (
                'id' => 198,
                'role_id' => 1,
                'menu_id' => 416,
                'created_at' => '2023-04-12 23:58:42',
                'updated_at' => '2023-04-12 23:58:42',
            ),
            35 => 
            array (
                'id' => 199,
                'role_id' => 9,
                'menu_id' => 416,
                'created_at' => '2023-04-12 23:58:42',
                'updated_at' => '2023-04-12 23:58:42',
            ),
            36 => 
            array (
                'id' => 200,
                'role_id' => 1,
                'menu_id' => 417,
                'created_at' => '2023-04-13 00:44:13',
                'updated_at' => '2023-04-13 00:44:13',
            ),
            37 => 
            array (
                'id' => 201,
                'role_id' => 9,
                'menu_id' => 417,
                'created_at' => '2023-04-13 00:44:13',
                'updated_at' => '2023-04-13 00:44:13',
            ),
            38 => 
            array (
                'id' => 210,
                'role_id' => 1,
                'menu_id' => 424,
                'created_at' => '2023-04-13 03:27:43',
                'updated_at' => '2023-04-13 03:27:43',
            ),
            39 => 
            array (
                'id' => 211,
                'role_id' => 9,
                'menu_id' => 424,
                'created_at' => '2023-04-13 03:27:43',
                'updated_at' => '2023-04-13 03:27:43',
            ),
            40 => 
            array (
                'id' => 218,
                'role_id' => 1,
                'menu_id' => 423,
                'created_at' => '2023-04-13 13:06:26',
                'updated_at' => '2023-04-13 13:06:26',
            ),
            41 => 
            array (
                'id' => 219,
                'role_id' => 9,
                'menu_id' => 423,
                'created_at' => '2023-04-13 13:06:26',
                'updated_at' => '2023-04-13 13:06:26',
            ),
            42 => 
            array (
                'id' => 220,
                'role_id' => 1,
                'menu_id' => 413,
                'created_at' => '2023-04-13 13:06:35',
                'updated_at' => '2023-04-13 13:06:35',
            ),
            43 => 
            array (
                'id' => 221,
                'role_id' => 9,
                'menu_id' => 413,
                'created_at' => '2023-04-13 13:06:35',
                'updated_at' => '2023-04-13 13:06:35',
            ),
            44 => 
            array (
                'id' => 224,
                'role_id' => 1,
                'menu_id' => 400,
                'created_at' => '2023-04-13 13:06:46',
                'updated_at' => '2023-04-13 13:06:46',
            ),
            45 => 
            array (
                'id' => 225,
                'role_id' => 9,
                'menu_id' => 400,
                'created_at' => '2023-04-13 13:06:46',
                'updated_at' => '2023-04-13 13:06:46',
            ),
            46 => 
            array (
                'id' => 226,
                'role_id' => 1,
                'menu_id' => 420,
                'created_at' => '2023-04-13 13:06:52',
                'updated_at' => '2023-04-13 13:06:52',
            ),
            47 => 
            array (
                'id' => 227,
                'role_id' => 9,
                'menu_id' => 420,
                'created_at' => '2023-04-13 13:06:52',
                'updated_at' => '2023-04-13 13:06:52',
            ),
            48 => 
            array (
                'id' => 228,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2023-04-18 05:43:44',
                'updated_at' => '2023-04-18 05:43:44',
            ),
            49 => 
            array (
                'id' => 229,
                'role_id' => 9,
                'menu_id' => 345,
                'created_at' => '2023-04-18 05:43:44',
                'updated_at' => '2023-04-18 05:43:44',
            ),
            50 => 
            array (
                'id' => 230,
                'role_id' => 1,
                'menu_id' => 425,
                'created_at' => '2023-04-18 05:44:21',
                'updated_at' => '2023-04-18 05:44:21',
            ),
            51 => 
            array (
                'id' => 231,
                'role_id' => 9,
                'menu_id' => 425,
                'created_at' => '2023-04-18 05:44:21',
                'updated_at' => '2023-04-18 05:44:21',
            ),
            52 => 
            array (
                'id' => 234,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2023-04-18 21:00:47',
                'updated_at' => '2023-04-18 21:00:47',
            ),
            53 => 
            array (
                'id' => 235,
                'role_id' => 9,
                'menu_id' => 373,
                'created_at' => '2023-04-18 21:00:47',
                'updated_at' => '2023-04-18 21:00:47',
            ),
            54 => 
            array (
                'id' => 236,
                'role_id' => 1,
                'menu_id' => 412,
                'created_at' => '2023-04-19 11:12:38',
                'updated_at' => '2023-04-19 11:12:38',
            ),
            55 => 
            array (
                'id' => 237,
                'role_id' => 9,
                'menu_id' => 412,
                'created_at' => '2023-04-19 11:12:38',
                'updated_at' => '2023-04-19 11:12:38',
            ),
            56 => 
            array (
                'id' => 246,
                'role_id' => 1,
                'menu_id' => 392,
                'created_at' => '2023-04-24 11:42:33',
                'updated_at' => '2023-04-24 11:42:33',
            ),
            57 => 
            array (
                'id' => 247,
                'role_id' => 9,
                'menu_id' => 392,
                'created_at' => '2023-04-24 11:42:33',
                'updated_at' => '2023-04-24 11:42:33',
            ),
            58 => 
            array (
                'id' => 253,
                'role_id' => 1,
                'menu_id' => 360,
                'created_at' => '2023-05-04 21:36:25',
                'updated_at' => '2023-05-04 21:36:25',
            ),
            59 => 
            array (
                'id' => 254,
                'role_id' => 9,
                'menu_id' => 360,
                'created_at' => '2023-05-04 21:36:25',
                'updated_at' => '2023-05-04 21:36:25',
            ),
            60 => 
            array (
                'id' => 255,
                'role_id' => 1,
                'menu_id' => 428,
                'created_at' => '2023-05-13 04:19:56',
                'updated_at' => '2023-05-13 04:19:56',
            ),
            61 => 
            array (
                'id' => 256,
                'role_id' => 1,
                'menu_id' => 429,
                'created_at' => '2023-05-16 15:06:19',
                'updated_at' => '2023-05-16 15:06:19',
            ),
            62 => 
            array (
                'id' => 257,
                'role_id' => 9,
                'menu_id' => 429,
                'created_at' => '2023-05-16 15:06:19',
                'updated_at' => '2023-05-16 15:06:19',
            ),
            63 => 
            array (
                'id' => 258,
                'role_id' => 1,
                'menu_id' => 430,
                'created_at' => '2023-05-16 18:10:19',
                'updated_at' => '2023-05-16 18:10:19',
            ),
            64 => 
            array (
                'id' => 259,
                'role_id' => 1,
                'menu_id' => 431,
                'created_at' => '2023-05-16 18:10:54',
                'updated_at' => '2023-05-16 18:10:54',
            ),
            65 => 
            array (
                'id' => 260,
                'role_id' => 1,
                'menu_id' => 432,
                'created_at' => '2023-05-23 20:26:29',
                'updated_at' => '2023-05-23 20:26:29',
            ),
            66 => 
            array (
                'id' => 261,
                'role_id' => 1,
                'menu_id' => 418,
                'created_at' => '2023-05-23 20:26:59',
                'updated_at' => '2023-05-23 20:26:59',
            ),
            67 => 
            array (
                'id' => 262,
                'role_id' => 9,
                'menu_id' => 418,
                'created_at' => '2023-05-23 20:26:59',
                'updated_at' => '2023-05-23 20:26:59',
            ),
            68 => 
            array (
                'id' => 263,
                'role_id' => 1,
                'menu_id' => 351,
                'created_at' => '2023-05-23 20:27:11',
                'updated_at' => '2023-05-23 20:27:11',
            ),
            69 => 
            array (
                'id' => 264,
                'role_id' => 9,
                'menu_id' => 351,
                'created_at' => '2023-05-23 20:27:11',
                'updated_at' => '2023-05-23 20:27:11',
            ),
            70 => 
            array (
                'id' => 265,
                'role_id' => 1,
                'menu_id' => 364,
                'created_at' => '2023-05-23 20:27:24',
                'updated_at' => '2023-05-23 20:27:24',
            ),
            71 => 
            array (
                'id' => 266,
                'role_id' => 9,
                'menu_id' => 364,
                'created_at' => '2023-05-23 20:27:24',
                'updated_at' => '2023-05-23 20:27:24',
            ),
            72 => 
            array (
                'id' => 267,
                'role_id' => 1,
                'menu_id' => 393,
                'created_at' => '2023-05-23 20:27:45',
                'updated_at' => '2023-05-23 20:27:45',
            ),
            73 => 
            array (
                'id' => 268,
                'role_id' => 9,
                'menu_id' => 393,
                'created_at' => '2023-05-23 20:27:45',
                'updated_at' => '2023-05-23 20:27:45',
            ),
            74 => 
            array (
                'id' => 269,
                'role_id' => 1,
                'menu_id' => 422,
                'created_at' => '2023-05-23 20:27:54',
                'updated_at' => '2023-05-23 20:27:54',
            ),
            75 => 
            array (
                'id' => 270,
                'role_id' => 9,
                'menu_id' => 422,
                'created_at' => '2023-05-23 20:27:54',
                'updated_at' => '2023-05-23 20:27:54',
            ),
            76 => 
            array (
                'id' => 271,
                'role_id' => 1,
                'menu_id' => 426,
                'created_at' => '2023-05-23 20:28:03',
                'updated_at' => '2023-05-23 20:28:03',
            ),
            77 => 
            array (
                'id' => 272,
                'role_id' => 9,
                'menu_id' => 426,
                'created_at' => '2023-05-23 20:28:03',
                'updated_at' => '2023-05-23 20:28:03',
            ),
            78 => 
            array (
                'id' => 273,
                'role_id' => 1,
                'menu_id' => 415,
                'created_at' => '2023-05-23 20:28:17',
                'updated_at' => '2023-05-23 20:28:17',
            ),
            79 => 
            array (
                'id' => 274,
                'role_id' => 9,
                'menu_id' => 415,
                'created_at' => '2023-05-23 20:28:17',
                'updated_at' => '2023-05-23 20:28:17',
            ),
            80 => 
            array (
                'id' => 275,
                'role_id' => 1,
                'menu_id' => 427,
                'created_at' => '2023-05-23 20:28:32',
                'updated_at' => '2023-05-23 20:28:32',
            ),
            81 => 
            array (
                'id' => 276,
                'role_id' => 1,
                'menu_id' => 410,
                'created_at' => '2023-05-23 20:28:42',
                'updated_at' => '2023-05-23 20:28:42',
            ),
            82 => 
            array (
                'id' => 277,
                'role_id' => 9,
                'menu_id' => 410,
                'created_at' => '2023-05-23 20:28:42',
                'updated_at' => '2023-05-23 20:28:42',
            ),
            83 => 
            array (
                'id' => 278,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2023-05-23 20:29:14',
                'updated_at' => '2023-05-23 20:29:14',
            ),
            84 => 
            array (
                'id' => 279,
                'role_id' => 1,
                'menu_id' => 411,
                'created_at' => '2023-05-23 20:29:29',
                'updated_at' => '2023-05-23 20:29:29',
            ),
            85 => 
            array (
                'id' => 280,
                'role_id' => 9,
                'menu_id' => 411,
                'created_at' => '2023-05-23 20:29:29',
                'updated_at' => '2023-05-23 20:29:29',
            ),
            86 => 
            array (
                'id' => 281,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2023-05-23 20:30:19',
                'updated_at' => '2023-05-23 20:30:19',
            ),
            87 => 
            array (
                'id' => 282,
                'role_id' => 9,
                'menu_id' => 397,
                'created_at' => '2023-05-23 20:30:19',
                'updated_at' => '2023-05-23 20:30:19',
            ),
            88 => 
            array (
                'id' => 283,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2023-05-23 20:30:31',
                'updated_at' => '2023-05-23 20:30:31',
            ),
            89 => 
            array (
                'id' => 285,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2023-05-23 21:06:14',
                'updated_at' => '2023-05-23 21:06:14',
            ),
            90 => 
            array (
                'id' => 286,
                'role_id' => 1,
                'menu_id' => 433,
                'created_at' => '2023-05-23 21:06:47',
                'updated_at' => '2023-05-23 21:06:47',
            ),
            91 => 
            array (
                'id' => 289,
                'role_id' => 1,
                'menu_id' => 434,
                'created_at' => '2023-05-24 00:01:20',
                'updated_at' => '2023-05-24 00:01:20',
            ),
            92 => 
            array (
                'id' => 291,
                'role_id' => 1,
                'menu_id' => 435,
                'created_at' => '2023-05-29 02:38:24',
                'updated_at' => '2023-05-29 02:38:24',
            ),
        ));
        
        
    }
}