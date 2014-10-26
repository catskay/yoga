// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Kay Wang',
            'username' => 'catskay',
            'email'    => 'catskay@gmail.com',
            'password' => Hash::make('yogayoga'),
        ));
    }

}