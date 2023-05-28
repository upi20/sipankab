<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_permissions')->delete();
        
        \DB::table('p_role_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 2,
                'role_id' => 9,
            ),
            2 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            3 => 
            array (
                'permission_id' => 3,
                'role_id' => 9,
            ),
            4 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 4,
                'role_id' => 9,
            ),
            6 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 5,
                'role_id' => 9,
            ),
            8 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 6,
                'role_id' => 9,
            ),
            10 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 7,
                'role_id' => 9,
            ),
            12 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 8,
                'role_id' => 9,
            ),
            14 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 9,
                'role_id' => 9,
            ),
            16 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 10,
                'role_id' => 9,
            ),
            18 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 11,
                'role_id' => 9,
            ),
            20 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 12,
                'role_id' => 9,
            ),
            22 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 13,
                'role_id' => 9,
            ),
            24 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 14,
                'role_id' => 9,
            ),
            26 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 15,
                'role_id' => 9,
            ),
            28 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            29 => 
            array (
                'permission_id' => 16,
                'role_id' => 9,
            ),
            30 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 17,
                'role_id' => 9,
            ),
            32 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            33 => 
            array (
                'permission_id' => 18,
                'role_id' => 9,
            ),
            34 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            35 => 
            array (
                'permission_id' => 19,
                'role_id' => 9,
            ),
            36 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 20,
                'role_id' => 9,
            ),
            38 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            39 => 
            array (
                'permission_id' => 21,
                'role_id' => 9,
            ),
            40 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 22,
                'role_id' => 9,
            ),
            42 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 23,
                'role_id' => 9,
            ),
            44 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            45 => 
            array (
                'permission_id' => 24,
                'role_id' => 9,
            ),
            46 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            47 => 
            array (
                'permission_id' => 25,
                'role_id' => 9,
            ),
            48 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            49 => 
            array (
                'permission_id' => 26,
                'role_id' => 9,
            ),
            50 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            51 => 
            array (
                'permission_id' => 27,
                'role_id' => 9,
            ),
            52 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            53 => 
            array (
                'permission_id' => 28,
                'role_id' => 9,
            ),
            54 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            55 => 
            array (
                'permission_id' => 29,
                'role_id' => 9,
            ),
            56 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            57 => 
            array (
                'permission_id' => 30,
                'role_id' => 9,
            ),
            58 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 31,
                'role_id' => 9,
            ),
            60 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            61 => 
            array (
                'permission_id' => 32,
                'role_id' => 9,
            ),
            62 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 33,
                'role_id' => 9,
            ),
            64 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            65 => 
            array (
                'permission_id' => 34,
                'role_id' => 9,
            ),
            66 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            67 => 
            array (
                'permission_id' => 35,
                'role_id' => 9,
            ),
            68 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            69 => 
            array (
                'permission_id' => 36,
                'role_id' => 9,
            ),
            70 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 37,
                'role_id' => 9,
            ),
            72 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 38,
                'role_id' => 9,
            ),
            74 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            75 => 
            array (
                'permission_id' => 39,
                'role_id' => 9,
            ),
            76 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            77 => 
            array (
                'permission_id' => 40,
                'role_id' => 9,
            ),
            78 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            79 => 
            array (
                'permission_id' => 41,
                'role_id' => 9,
            ),
            80 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            81 => 
            array (
                'permission_id' => 42,
                'role_id' => 9,
            ),
            82 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            83 => 
            array (
                'permission_id' => 43,
                'role_id' => 9,
            ),
            84 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            85 => 
            array (
                'permission_id' => 44,
                'role_id' => 9,
            ),
            86 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            87 => 
            array (
                'permission_id' => 45,
                'role_id' => 9,
            ),
            88 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            89 => 
            array (
                'permission_id' => 46,
                'role_id' => 9,
            ),
            90 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            91 => 
            array (
                'permission_id' => 47,
                'role_id' => 9,
            ),
            92 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            93 => 
            array (
                'permission_id' => 48,
                'role_id' => 9,
            ),
            94 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            95 => 
            array (
                'permission_id' => 49,
                'role_id' => 9,
            ),
            96 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 50,
                'role_id' => 9,
            ),
            98 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            99 => 
            array (
                'permission_id' => 51,
                'role_id' => 9,
            ),
            100 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            101 => 
            array (
                'permission_id' => 52,
                'role_id' => 9,
            ),
            102 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            103 => 
            array (
                'permission_id' => 53,
                'role_id' => 9,
            ),
            104 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            105 => 
            array (
                'permission_id' => 54,
                'role_id' => 9,
            ),
            106 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            107 => 
            array (
                'permission_id' => 55,
                'role_id' => 9,
            ),
            108 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            109 => 
            array (
                'permission_id' => 56,
                'role_id' => 9,
            ),
            110 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            111 => 
            array (
                'permission_id' => 57,
                'role_id' => 9,
            ),
            112 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            113 => 
            array (
                'permission_id' => 58,
                'role_id' => 9,
            ),
            114 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            115 => 
            array (
                'permission_id' => 59,
                'role_id' => 9,
            ),
            116 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            117 => 
            array (
                'permission_id' => 60,
                'role_id' => 9,
            ),
            118 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            119 => 
            array (
                'permission_id' => 61,
                'role_id' => 9,
            ),
            120 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 62,
                'role_id' => 9,
            ),
            122 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            123 => 
            array (
                'permission_id' => 63,
                'role_id' => 9,
            ),
            124 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            125 => 
            array (
                'permission_id' => 64,
                'role_id' => 9,
            ),
            126 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            127 => 
            array (
                'permission_id' => 65,
                'role_id' => 9,
            ),
            128 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            129 => 
            array (
                'permission_id' => 66,
                'role_id' => 9,
            ),
            130 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            131 => 
            array (
                'permission_id' => 67,
                'role_id' => 9,
            ),
            132 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            133 => 
            array (
                'permission_id' => 68,
                'role_id' => 9,
            ),
            134 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            135 => 
            array (
                'permission_id' => 69,
                'role_id' => 9,
            ),
            136 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            137 => 
            array (
                'permission_id' => 70,
                'role_id' => 9,
            ),
            138 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            139 => 
            array (
                'permission_id' => 71,
                'role_id' => 9,
            ),
            140 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            141 => 
            array (
                'permission_id' => 72,
                'role_id' => 9,
            ),
            142 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            143 => 
            array (
                'permission_id' => 73,
                'role_id' => 9,
            ),
            144 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            145 => 
            array (
                'permission_id' => 74,
                'role_id' => 9,
            ),
            146 => 
            array (
                'permission_id' => 75,
                'role_id' => 1,
            ),
            147 => 
            array (
                'permission_id' => 75,
                'role_id' => 9,
            ),
            148 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            149 => 
            array (
                'permission_id' => 76,
                'role_id' => 9,
            ),
            150 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            151 => 
            array (
                'permission_id' => 77,
                'role_id' => 9,
            ),
            152 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            153 => 
            array (
                'permission_id' => 78,
                'role_id' => 9,
            ),
            154 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            155 => 
            array (
                'permission_id' => 79,
                'role_id' => 9,
            ),
            156 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            157 => 
            array (
                'permission_id' => 80,
                'role_id' => 9,
            ),
            158 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            159 => 
            array (
                'permission_id' => 81,
                'role_id' => 9,
            ),
            160 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            161 => 
            array (
                'permission_id' => 82,
                'role_id' => 9,
            ),
            162 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            163 => 
            array (
                'permission_id' => 83,
                'role_id' => 9,
            ),
            164 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            165 => 
            array (
                'permission_id' => 84,
                'role_id' => 9,
            ),
            166 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            167 => 
            array (
                'permission_id' => 85,
                'role_id' => 9,
            ),
            168 => 
            array (
                'permission_id' => 86,
                'role_id' => 1,
            ),
            169 => 
            array (
                'permission_id' => 86,
                'role_id' => 9,
            ),
            170 => 
            array (
                'permission_id' => 87,
                'role_id' => 1,
            ),
            171 => 
            array (
                'permission_id' => 87,
                'role_id' => 9,
            ),
            172 => 
            array (
                'permission_id' => 88,
                'role_id' => 1,
            ),
            173 => 
            array (
                'permission_id' => 88,
                'role_id' => 9,
            ),
            174 => 
            array (
                'permission_id' => 89,
                'role_id' => 1,
            ),
            175 => 
            array (
                'permission_id' => 89,
                'role_id' => 9,
            ),
            176 => 
            array (
                'permission_id' => 90,
                'role_id' => 1,
            ),
            177 => 
            array (
                'permission_id' => 90,
                'role_id' => 9,
            ),
            178 => 
            array (
                'permission_id' => 91,
                'role_id' => 1,
            ),
            179 => 
            array (
                'permission_id' => 91,
                'role_id' => 9,
            ),
            180 => 
            array (
                'permission_id' => 92,
                'role_id' => 1,
            ),
            181 => 
            array (
                'permission_id' => 92,
                'role_id' => 9,
            ),
            182 => 
            array (
                'permission_id' => 93,
                'role_id' => 1,
            ),
            183 => 
            array (
                'permission_id' => 93,
                'role_id' => 9,
            ),
            184 => 
            array (
                'permission_id' => 94,
                'role_id' => 1,
            ),
            185 => 
            array (
                'permission_id' => 94,
                'role_id' => 9,
            ),
            186 => 
            array (
                'permission_id' => 95,
                'role_id' => 1,
            ),
            187 => 
            array (
                'permission_id' => 95,
                'role_id' => 9,
            ),
            188 => 
            array (
                'permission_id' => 96,
                'role_id' => 1,
            ),
            189 => 
            array (
                'permission_id' => 96,
                'role_id' => 9,
            ),
            190 => 
            array (
                'permission_id' => 97,
                'role_id' => 1,
            ),
            191 => 
            array (
                'permission_id' => 97,
                'role_id' => 9,
            ),
            192 => 
            array (
                'permission_id' => 98,
                'role_id' => 1,
            ),
            193 => 
            array (
                'permission_id' => 98,
                'role_id' => 9,
            ),
            194 => 
            array (
                'permission_id' => 99,
                'role_id' => 1,
            ),
            195 => 
            array (
                'permission_id' => 99,
                'role_id' => 9,
            ),
            196 => 
            array (
                'permission_id' => 100,
                'role_id' => 1,
            ),
            197 => 
            array (
                'permission_id' => 100,
                'role_id' => 9,
            ),
            198 => 
            array (
                'permission_id' => 101,
                'role_id' => 1,
            ),
            199 => 
            array (
                'permission_id' => 101,
                'role_id' => 9,
            ),
            200 => 
            array (
                'permission_id' => 102,
                'role_id' => 1,
            ),
            201 => 
            array (
                'permission_id' => 102,
                'role_id' => 9,
            ),
            202 => 
            array (
                'permission_id' => 103,
                'role_id' => 1,
            ),
            203 => 
            array (
                'permission_id' => 103,
                'role_id' => 9,
            ),
            204 => 
            array (
                'permission_id' => 104,
                'role_id' => 1,
            ),
            205 => 
            array (
                'permission_id' => 104,
                'role_id' => 9,
            ),
            206 => 
            array (
                'permission_id' => 105,
                'role_id' => 1,
            ),
            207 => 
            array (
                'permission_id' => 105,
                'role_id' => 9,
            ),
            208 => 
            array (
                'permission_id' => 106,
                'role_id' => 1,
            ),
            209 => 
            array (
                'permission_id' => 106,
                'role_id' => 9,
            ),
            210 => 
            array (
                'permission_id' => 107,
                'role_id' => 1,
            ),
            211 => 
            array (
                'permission_id' => 107,
                'role_id' => 9,
            ),
            212 => 
            array (
                'permission_id' => 108,
                'role_id' => 9,
            ),
            213 => 
            array (
                'permission_id' => 109,
                'role_id' => 9,
            ),
            214 => 
            array (
                'permission_id' => 110,
                'role_id' => 9,
            ),
            215 => 
            array (
                'permission_id' => 111,
                'role_id' => 9,
            ),
            216 => 
            array (
                'permission_id' => 112,
                'role_id' => 9,
            ),
            217 => 
            array (
                'permission_id' => 113,
                'role_id' => 9,
            ),
            218 => 
            array (
                'permission_id' => 114,
                'role_id' => 9,
            ),
            219 => 
            array (
                'permission_id' => 115,
                'role_id' => 9,
            ),
            220 => 
            array (
                'permission_id' => 116,
                'role_id' => 9,
            ),
            221 => 
            array (
                'permission_id' => 117,
                'role_id' => 9,
            ),
            222 => 
            array (
                'permission_id' => 118,
                'role_id' => 9,
            ),
            223 => 
            array (
                'permission_id' => 119,
                'role_id' => 9,
            ),
            224 => 
            array (
                'permission_id' => 120,
                'role_id' => 9,
            ),
            225 => 
            array (
                'permission_id' => 121,
                'role_id' => 9,
            ),
            226 => 
            array (
                'permission_id' => 122,
                'role_id' => 9,
            ),
            227 => 
            array (
                'permission_id' => 123,
                'role_id' => 9,
            ),
            228 => 
            array (
                'permission_id' => 124,
                'role_id' => 9,
            ),
            229 => 
            array (
                'permission_id' => 125,
                'role_id' => 9,
            ),
            230 => 
            array (
                'permission_id' => 126,
                'role_id' => 9,
            ),
            231 => 
            array (
                'permission_id' => 127,
                'role_id' => 9,
            ),
            232 => 
            array (
                'permission_id' => 128,
                'role_id' => 9,
            ),
            233 => 
            array (
                'permission_id' => 129,
                'role_id' => 9,
            ),
            234 => 
            array (
                'permission_id' => 130,
                'role_id' => 9,
            ),
            235 => 
            array (
                'permission_id' => 131,
                'role_id' => 9,
            ),
            236 => 
            array (
                'permission_id' => 132,
                'role_id' => 9,
            ),
            237 => 
            array (
                'permission_id' => 133,
                'role_id' => 9,
            ),
            238 => 
            array (
                'permission_id' => 134,
                'role_id' => 9,
            ),
            239 => 
            array (
                'permission_id' => 135,
                'role_id' => 9,
            ),
            240 => 
            array (
                'permission_id' => 136,
                'role_id' => 9,
            ),
            241 => 
            array (
                'permission_id' => 137,
                'role_id' => 9,
            ),
            242 => 
            array (
                'permission_id' => 138,
                'role_id' => 9,
            ),
            243 => 
            array (
                'permission_id' => 139,
                'role_id' => 9,
            ),
            244 => 
            array (
                'permission_id' => 140,
                'role_id' => 9,
            ),
            245 => 
            array (
                'permission_id' => 141,
                'role_id' => 9,
            ),
            246 => 
            array (
                'permission_id' => 142,
                'role_id' => 9,
            ),
            247 => 
            array (
                'permission_id' => 143,
                'role_id' => 9,
            ),
            248 => 
            array (
                'permission_id' => 144,
                'role_id' => 9,
            ),
            249 => 
            array (
                'permission_id' => 145,
                'role_id' => 9,
            ),
            250 => 
            array (
                'permission_id' => 146,
                'role_id' => 9,
            ),
            251 => 
            array (
                'permission_id' => 147,
                'role_id' => 9,
            ),
            252 => 
            array (
                'permission_id' => 148,
                'role_id' => 9,
            ),
            253 => 
            array (
                'permission_id' => 149,
                'role_id' => 9,
            ),
            254 => 
            array (
                'permission_id' => 150,
                'role_id' => 9,
            ),
            255 => 
            array (
                'permission_id' => 151,
                'role_id' => 1,
            ),
            256 => 
            array (
                'permission_id' => 151,
                'role_id' => 9,
            ),
            257 => 
            array (
                'permission_id' => 152,
                'role_id' => 1,
            ),
            258 => 
            array (
                'permission_id' => 152,
                'role_id' => 9,
            ),
            259 => 
            array (
                'permission_id' => 153,
                'role_id' => 1,
            ),
            260 => 
            array (
                'permission_id' => 153,
                'role_id' => 9,
            ),
            261 => 
            array (
                'permission_id' => 154,
                'role_id' => 1,
            ),
        ));
        
        
    }
}