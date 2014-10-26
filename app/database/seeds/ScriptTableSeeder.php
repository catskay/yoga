// app/database/seeds/UserTableSeeder.php

<?php

class ScriptTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('scripts')->delete();
		Script::create(array(
			'name'     => 'script1',
			'uid' => '2',
			'date'    => '2014-10-15',
			'notes' => 'This script is for addiction.',
			'methods' => 'asldasdg',
			'font_size' => 'small',
		));
                Script::create(array(
			'name'     => 'script2',
			'uid' => '2',
			'date'    => '2014-10-08',
			'notes' => 'This script is for insomnia.',
			'methods' => 'asldasdg',
			'font_size' => 'medium',
		));
                Script::create(array(
			'name'     => 'script3',
			'uid' => '2',
			'date'    => '2014-10-01',
			'notes' => 'This script is for kids.',
			'methods' => 'asldasdg',
			'font_size' => 'large',
		));
                
	}

}

