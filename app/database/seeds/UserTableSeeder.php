	// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		//DB::table('users')->delete();
		User::create(array(
            'name'     => 'Kay Wang',
            'email'    => 'catskay@gmail.com',
            'password' => Hash::make('yogayoga'),
        ));
		User::create(array(
			'name'     => 'Luke Burtch',
			'email'    => 'burtlu01@gettysburg.edu',
			'password' => Hash::make('itsme'),
		));
		User::create(array(
			'name'     => 'Phoebe Eng',
			'email'    => 'engph01@gettysburg.edu',
			'password' => Hash::make('gettcoll'),
		));
                User::create(array(
			'name'     => 'Luke Burtch',
			'email'    => 'onethousandeight@yahoo.com',
			'password' => Hash::make('itsstillme'),
		));
                User::create(array(
			'name'     => 'Tony Stark',
			'email'    => 'tony@starkindustries.com',
			'password' => Hash::make('ironman'),
		));
                User::create(array(
			'name'     => 'Steve Rogers',
			'email'    => 'steve@goarmy.com',
			'password' => Hash::make('cap'),
		));
                 User::create(array(
			'name'     => 'Anita Tosten',
			'email'    => 'anita@pocopaper.com',
			'password' => Hash::make('yogayoga'),
		));
	}

}

