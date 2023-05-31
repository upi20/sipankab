<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PRolesTableSeeder::class);
        $this->call(PPermissionsTableSeeder::class);
        $this->call(PMenuTableSeeder::class);
        $this->call(PModelHasPermissionsTableSeeder::class);
        $this->call(PModelHasRolesTableSeeder::class);
        $this->call(PRoleHasPermissionsTableSeeder::class);
        $this->call(PRoleHasMenuTableSeeder::class);

        $this->call(ImportKriteriaTableSeeder::class);
        $this->call(KriteriaTableSeeder::class);

        $this->call(ImportPendudukTableSeeder::class);
        $this->call(PendudukTableSeeder::class);
        $this->call(PendudukNilaiTableSeeder::class);

        $this->call(SessionsTableSeeder::class);
        $this->call(LogsTableSeeder::class);
        $this->call(ImportKecamatanTableSeeder::class);
        $this->call(KecamatanTableSeeder::class);
        $this->call(ImportTahapanTableSeeder::class);
        $this->call(ImportCalonTableSeeder::class);
        $this->call(TahapanTableSeeder::class);
        $this->call(CalonTableSeeder::class);
        $this->call(CalonNilaiTableSeeder::class);
    }
}
