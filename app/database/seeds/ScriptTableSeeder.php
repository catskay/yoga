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
			'font_size' => 'small',
		));
                Script::create(array(
			'name'     => 'script2',
			'uid' => '2',
			'date'    => '2014-10-08',
			'notes' => 'This script is for insomnia.',
			'font_size' => 'medium',
		));
                Script::create(array(
			'name'     => 'script3',
			'uid' => '2',
			'date'    => '2014-10-01',
			'notes' => 'This script is for kids.',
			'font_size' => 'large',
		));
                Script::create(array(
			'name'     => 'my script',
			'uid' => '2',
			'date'    => '2014-10-15',
			'notes' => 'This script is for addiction.',
			'font_size' => 'small',
		));
                Script::create(array(
			'name'     => 'my other script',
			'uid' => '1',
			'date'    => '2014-10-08',
			'notes' => 'This script is for insomnia.',
			'font_size' => 'medium',
		));
                Script::create(array(
			'name'     => 'script a',
			'uid' => '3',
			'date'    => '2014-10-15',
			'notes' => 'This script is for kids.',
			'font_size' => 'small',
		));
                Script::create(array(
			'name'     => 'script b',
			'uid' => '3',
			'date'    => '2014-10-08',
			'notes' => 'This script is for insomnia.',
			'font_size' => 'large',
		));
                
	}

}

