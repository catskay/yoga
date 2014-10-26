<?php

class SectionTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('sections')->delete();
		Section::create(array(
			'sname'     => 'I. Internalizing Awareness',
		));
        
                
	}

}

