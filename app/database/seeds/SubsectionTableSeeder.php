<?php

class SubsectionTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('subsections')->delete();
		Subsection::create(array(
			'ssname'     => 'A. Quieting/Centering',
			'sid' => '1',
		));
        
                
	}

}

