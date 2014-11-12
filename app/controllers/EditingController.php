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

	
	public function showTemp()
	{
		return View::make('temp');
	}

	public function showSummary()
	{
		$arr = $_SERVER['array'];
		echo "<script>alert('".$arr."');</script>";
		$script = new Script;
		$script->name = 'placeholder';
		$script->notes = 'placeholder';
		$script->uid = Auth::user()->uid;
		$script->date = date('Y-m-d');
		$script->font_size = 'medium';
		$script->save();

		foreach($arr as $id){
			$chMethod = new ChosenMethod;
			$chMethod->mid = $id;
			$chMethod->id = $script->id;
			$chMethod->save();
		}
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

	public function showPreview()
	{
		return View::make('preview');
	}
}
