
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
		$mcount = 1;

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
				$text = $text.'&#10;'.$next;
				$next = $this->nextLine($file);
			}
			if($mcount === 2 || $mcount === 3 || $mcount === 7 || $mcount === 10 || $mcount === 19 || $mcount === 20 || $mcount === 23 || $mcount === 24 || $mcount === 25 || $mcount === 26 || $mcount === 27){
				$editable = 'true';
			}
			else{
				$editable = 'false';
			}
			Method::create(array('mname'=>$mname,'ssid' => $currSSid,'text'=>$text, 'editable'=>$editable));
			$mcount++;
			$text = "";
			$next = $this->nextLine($file);
		}
        
        fclose($file);        
	}

	

}

