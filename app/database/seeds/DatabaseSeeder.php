<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');

		$this->call('ScriptTableSeeder');

		$this->call('SectionTableSeeder');

		$this->call('SubsectionTableSeeder');

		$this->call('MethodTableSeeder');
	}

}
