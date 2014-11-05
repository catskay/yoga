<?php

class EditingController extends BaseController {


	public function showSelect()
	{
		$methods = Method::all();
		$ssid = 0;
		$sections = Section::all();
		$arr = array();
		foreach($sections as $section){
			$subsections = Subsection::where('sid','=',$section->sid)->get();
			$ssArr = array();
			foreach($subsections as $subsection){
				$methods = Method::where('ssid','=',$subsection->ssid)->get();
				array_push($ssArr,$subsection->ssname=>$methods);
			}
			array_push($arr,$section->sname=>$ssArr);
		}
		return View::make('selection')->with('arr',$arr);
	}

	public function showSelect2()
	{
		return View::make('selection2');
	}

	
public function showTemp()
	{
		return View::make('temp');
	}

public function showSummary()
	{
		return View::make('summary');
	}

}
