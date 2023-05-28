<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Isep Lutpi Nur',
                'email' => 'iseplutpinur7@gmail.com',
                'foto' => '202304182058334.png',
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O',
                'active' => 1,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => 'TVR7Q7JcDjcSdf2aNqutojP8DRDc0tAqYWbMUnK7llilxZUqZ3XcuC9GKzJv',
                'created_at' => NULL,
                'updated_at' => '2023-04-19 17:19:26',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Vakrun Nisah',
                'email' => 'vakrunnisah@mail.com',
                'foto' => NULL,
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$hfINTC0pQ.zQC/xsqwfoBuvF4DhsmPMnv5aoJbNke8u3JI00Tfjc2',
                'active' => 1,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-13 03:26:15',
                'updated_at' => '2023-05-23 20:34:47',
            ),
        ));
        
        
    }
}