<?php

class EditingController extends BaseController {


	public function showSelector()
	{
		// $selectedMethods = $_POST['data'];
		// return View::make('selector') -> with('selectedMethods', $selectedMethods);

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
		return View::make('selector')->with('arr',$arr);
	}

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
		$meth = Input::get('meth');
		$method = Method::where('mid', '=', $meth)->first();
		$subsection = Subsection::where('ssid', '=', $method->ssid)->first();
		$section = Section::where('sid', '=', $subsection->sid)->first();
		$array = array('method'=>$method, 'subsection'=>$subsection, 'section'=>$section);

		return View::make('edit')->with('array', $array);
	}

	public function showView()
	{
		return View::make('view');
	}

	public function showPreview()
	{
		return View::make('preview');
	}
}
