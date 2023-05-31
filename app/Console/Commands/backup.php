<?php

namespace App\Console\Commands;

use App\Models\Calon;
use App\Models\CalonNilai;
use App\Models\Import\Calon as ImportCalon;
use App\Models\Import\Kecamatan as ImportKecamatan;
use App\Models\Import\Kriteria as ImportKriteria;
use App\Models\Import\Penduduk as ImportPenduduk;
use App\Models\Import\Tahapan as ImportTahapan;
use App\Models\Kecamatan;
use App\Models\Kriteria;
use App\Models\Menu\Admin as MenuAdmin;
use App\Models\Penduduk;
use App\Models\PendudukNilai;
use App\Models\RoleHasMenu;
use App\Models\Tahapan;
use Illuminate\Console\Command;

class backup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:backup {type=all} {--current=1}  {--users=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup database using iseed';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tableNames = config('permission.table_names');
        $is_windows = strtolower(PHP_SHLIB_SUFFIX) === 'dll';

        $win_parse = function ($str) use ($is_windows) {
            return str_replace(['\\', '/'], ($is_windows ? '\\' : '/'), $str);
        };

        $root = dirname(__FILE__);
        $root = "$root/../../..";
        $arg_type = $this->argument('type');
        $opt_users = $this->option('users');
        // backup migrasi database sebelumnya
        if ($this->option('current') == 1) {
            // pindahkan folder dulu
            $folder_parent = $win_parse("$root/backup");
            $folder_backup = $win_parse("$folder_parent/" . date('Y-m-d'));

            if (!file_exists("$folder_parent")) echo shell_exec("mkdir $folder_parent");
            if (!file_exists($folder_backup)) echo shell_exec("mkdir $folder_backup");
            $copy = $is_windows ? 'copy' : 'cp -R';
            shell_exec($win_parse("$copy $root/database/seeders/* $folder_backup"));

            echo 'Berhasil backup data sebelumnya' . PHP_EOL;
        }

        $tables =  [
            'permissions' => [
                $tableNames['roles'],
                $tableNames['permissions'],
                MenuAdmin::tableName,
                $tableNames['model_has_permissions'],
                $tableNames['model_has_roles'],
                $tableNames['role_has_permissions'],
                RoleHasMenu::tableName,
            ],
            'setting' => [
                'sessions',
                'logs',
            ],
            'import' => [
                ImportKecamatan::tableName,
                ImportTahapan::tableName,
                ImportCalon::tableName,
            ],
            'spk' => [
                Kecamatan::tableName,
                Tahapan::tableName,
                Calon::tableName,
                CalonNilai::tableName,
            ],
        ];
        if ($opt_users == 1 || $arg_type == 'users') echo shell_exec('php artisan iseed users --force');
        foreach ($tables as $k => $t) {
            $type = $arg_type == 'all' ? $tables[$k] : ($k == $arg_type ? $t : []);
            foreach ($type as $table) {
                echo shell_exec('php artisan iseed ' . $table . ' --force');
            }

            if (in_array($arg_type, $t)) {
                echo shell_exec('php artisan iseed ' . $arg_type . ' --force');
            }
        }
        return 1;
    }
}
