<?php

class EditingController extends BaseController {


	public function showSelect()
	{
		return View::make('selection');
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
