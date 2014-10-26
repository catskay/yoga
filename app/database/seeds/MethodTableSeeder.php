<?php

class MethodTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('methods')->delete();
		Method::create(array(
			'mname'     => '1. Om',
			'ssid' => '1',
			'text' => 'Option One:
• Close your eyes and allow your attention to turn inward.
• Bring your attention to the breath.
• Feel the body beginning to relax with each progressive exhalation.
• Let’s take a deep breath in together and chant the sound of Om.
• (Om)
• Allow the vibrational impact of the sound to bring outwardly focused attention inward.
Option Two:
• Close your eyes and allow your attention to turn inward.
• Bring your attention to the breath.
• Feel the body beginning to relax with each progressive exhalation.
• We will chant a continuous Om together.
• As you chant, let the sound come from deep in your belly. When you run out of breath, take another full breath in and
begin again. We will repeat three times.
• Let’s begin.
• Take a full breath in (Om).
• Come to silence.
• Sense sound dissolving into silence.
• Merge into that silent space. ',
		));
        
                
	}

}

