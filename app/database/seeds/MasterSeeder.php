
<?php

class MasterSeeder extends Seeder
{

	public function nextLine($file)
	{
		
		
		$next = fgets($file);
		while($next===""||ctype_space($next)){
			$next = fgets($file);
			
		}

		return $next;

	}

	public function run()
	{
		$currSid = -1;
		$currSSid = -1;
		$currSname = '';
		$currSSname = '';
		$text = '';
		$mname = '';

		$file = fopen('script-cards.txt','r');

		$next = $this->nextLine($file);
		
		while(!feof($file)){

			if(strcmp(trim($next),trim($currSname))!=0){
				$currSname = $next;
				Section::create(array('sname' => $next));
				$currSid = Section::where('sname','=',$next)->first()->sid;
			}
			
			$next = $this->nextLine($file);
			if(strcmp($next,$currSSname)!=0){
				$currSSname = $next;
				Subsection::create(array('ssname' => $currSSname, 'sid' => $currSid));
				$currSSid = Subsection::where('ssname','=',$currSSname)->first()->ssid;
			}
			
			$next = $this->nextLine($file);
			$mname = $next;
			$next = $this->nextLine($file);
			while(strcmp(trim($next), '~')!=0){
				$text = $text.$next;
				$next = $this->nextLine($file);
			}
			Method::create(array('mname'=>$mname,'ssid' => $currSSid,'text'=>$text));
			$text = "";
			$next = $this->nextLine($file);
		}
        
        fclose($file);        
	}

	

}

