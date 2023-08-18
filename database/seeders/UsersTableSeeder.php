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
                'id' => '1',
                'name' => 'Vakrun Nisah',
                'email' => 'vakrunnisah08@gmail.com',
                'foto' => '2023062711215626.jpg',
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O',
                'active' => '1',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => 'jDQjr5ckNtHMtEWqKcx0IqnZLmgAZINpSrPhHSBtqWTHVpWxdrg0J94qi4aK',
                'created_at' => NULL,
                'updated_at' => '2023-07-14 09:56:25',
            ),
        ));
        
        
    }
}