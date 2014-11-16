<?php

class EditingController extends BaseController {


	public function showSelector()
	{
		$selectedMethods = Input::get('methods');
		echo '<script>alert ('.json_encode($selectedMethods).');</script>';
		$array = array();
		// foreach($selectedMethods as $meth){
		// 	$method = Method::where('mid', '=', $meth)->get();
		// 	$ssArray = array();
		// 	$subsection = Subsection::where('ssid', '=', $method->ssid)->get();
		// 	$section = Section::where('sid', '=', $subsection->sid)->get();
		// $array[$] = array('method'=>$method, 'subsection'=>$subsection, 'section'=>$section);
		// }

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

		if($meth === '27'){
			return View::make('editables/method27')->with('array', $array);
		}
		else if($meth === '26'){
			return View::make('editables/method26')->with('array', $array);
		}
		else if($meth === '10'){
			return View::make('editables/method10')->with('array', $array);
		}
		else if($meth === '23'){
			return View::make('editables/method23')->with('array', $array);
		}
		else if($meth === '24'){
			return View::make('editables/method24')->with('array', $array);
		}

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
