<?php

class EditingController extends BaseController {


	public function showSelect()
	{
		$methods = Method::all();
		return View::make('selection')->with('methods',$methods);
	}

	public function showSelect2()
	{
		$sections = Section::all();
		$arr = array();
		foreach($sections as $section){
			$subsections = Subsection::where('sid','=',$section->sid)->get();
			$ssArr = array();
			foreach($subsections as $subsection){
				$methods = Method::where('ssid','=',$subsection->ssid)->get();
				$ssArr[$subsection->ssname] = $methods;
			}
			$arr[$section->sname] = $ssArr;
		}
		return View::make('selection2')->with('arr',$arr);
	}

	//$('#optgroupp').val();

	
	public function showTemp()
	{
		return View::make('temp');
	}

	public function showSummary()
	{
		return View::make('summary');
	}

	public function showEdit()
	{
		return View::make('edit');
	}

	public function showView()
	{
		return View::make('view');
	}
}
