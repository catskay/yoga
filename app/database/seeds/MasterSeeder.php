
<?php

class MasterSeeder extends Seeder
{

	public function run()
	{
		$currSid = -1;
		$currSsid = -1;
		$currSname = '';
		$currSsname = '';

		$file = fopen('script-cards.txt','r');


                
	}

	public function nextLine($file)
	{
		$next = fgets($file)

		while($next==""){
			$next = fgets($file);
		}

	}

}

