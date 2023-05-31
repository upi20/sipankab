<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VisitorsIpDetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('visitors_ip_detail')->delete();
    }
}
