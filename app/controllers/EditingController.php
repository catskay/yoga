<?php

class EditingController extends BaseController {



	public function showSelector()
	{

		$methList = Input::get('methodList');
		$methListArray = explode(',', $methList);

		$script = new Script;
		$script->name = 'placeholder';
		$script->notes = 'placeholder';
		$script->uid = Auth::user()->uid;
		$script->date = date('Y-m-d');
		$script->font_size = 'medium';
		$script->save();
		Session::put('scrId',$script->id);

		foreach($methListArray as $id){
			$chMethod = new ChosenMethod;
			$chMethod->mid = $id;
			$chMethod->id = $script->id;
			$chMethod->save();
		}



  //       $sections = Section::all();
		// $arr = array();
		// foreach($methListArray as $methodid){
		// 	$method = Method::where('mid', '=', $methodid)->get();
		// 	$subsections = Subsection::where('ssid','=',$method->ssid)->get();
		// 	$ssArr = array();
		// 	foreach($subsections as $subsection){
  //       		$sections = Section::where('sid', '=', $subsection->sid)->get();
		// 		$ssArr[$subsection->ssname] = $sections;
		// 	}
		// 	$arr[$method->mname] = $ssArr;
		// }
		// return View::make('selector')->with('arr',$arr);


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
		$arr = $_SERVER['array'];
		echo "<script>alert('".$arr."');</script>";
		$script = new Script;
		$script->name = 'placeholder';
		$script->notes = 'placeholder';
		$script->uid = Auth::user()->uid;
		$script->date = date('Y-m-d');
		$script->font_size = 'medium';
		$script->save();
		Session::put('scrId',$script->id);

		foreach($arr as $id){
			$chMethod = new ChosenMethod;
			$chMethod->mid = $id;
			$chMethod->id = $script->id;
			$chMethod->save();
		}
		return View::make('summary');
	}

	public function doMethod19()
	{
		$array = Input::get('checkgroup');
		$str = Input::get('text1');
		$str = $str.' '.Input::get('text2');
		foreach($array as $box){
			$str = $str.' '.$box;
		}

		$str = $str.' '.Input::get('custom');

		$str = $str.' '.Input::get('text3');

		$chMethod = new ChosenMethod;
		$chMethod->mid = 19;
		//$chMethod->id = Session::get('scrId');
		$chMethod->id = 1;
		$chMethod->text = $str;
		$chMethod->save();

		//$chMethod = ChosenMethod::where('mid','=',19)->where('id','=',Session::get('scrId'))->first();
		//$chMethod->text = $str;

		$request = Request::create('selector', 'GET', array());
		return Route::dispatch($request)->getContent();
	}

	public function doMethod20()
	{
		$array = Input::get('checkgroup');
		$str = Input::get('text1');
		foreach($array as $box){
			$str = $str.' '.$box;
		}

		$str = $str.' '.Input::get('custom');

		$str = $str.' '.Input::get('text2');

		$chMethod = new ChosenMethod;
		$chMethod->mid = 20;
		//$chMethod->id = Session::get('scrId');
		$chMethod->id = 1;
		$chMethod->text = $str;
		$chMethod->save();

		//$chMethod = ChosenMethod::where('mid','=',20)->where('id','=',Session::get('scrId'))->first();
		//$chMethod->text = $str;

		$request = Request::create('selector', 'GET', array());
		return Route::dispatch($request)->getContent();
	}

	public function doMethod7()
	{
		$array = Input::get('checkgroup');
		$str = '';
		foreach($array as $box){
			$str = $str.' '.$box;
		}

		$chMethod = new ChosenMethod;
		$chMethod->mid = 7;
		//$chMethod->id = Session::get('scrId');
		$chMethod->id = 1;
		$chMethod->text = $str;
		$chMethod->save();

		//$chMethod = ChosenMethod::where('mid','=',7)->where('id','=',Session::get('scrId'))->first();
		//$chMethod->text = $str;

		$request = Request::create('selector', 'GET', array());
		return Route::dispatch($request)->getContent();
	}

	public function doMethod25()
	{
		$array = Input::get('checkgroup');
		$str = Input::get('text1');
		foreach($array as $box){
			$str = $str.' '.$box;
		}

		$chMethod = new ChosenMethod;
		$chMethod->mid = 25;
		//$chMethod->id = Session::get('scrId');
		$chMethod->id = 1;
		$chMethod->text = $str;
		$chMethod->save();

		//$chMethod = ChosenMethod::where('mid','=',25)->where('id','=',Session::get('scrId'))->first();
		//$chMethod->text = $str;

		$request = Request::create('selector', 'GET', array());
		return Route::dispatch($request)->getContent();
	}

	public function doMethod10()
	{
		$array = Input::get('checkgroup');
		$str = Input::get('text1');
		$str = $str.' '.Input::get('text2');
		foreach($array as $box){
			$str = $str.' '.$box;
		}

		$str = $str.' '.Input::get('custom');

		$str = $str.' '.Input::get('text3');

		$chMethod = new ChosenMethod;
		$chMethod->mid = 10;
		//$chMethod->id = Session::get('scrId');
		$chMethod->id = 1;
		$chMethod->text = $str;
		$chMethod->save();

		//$chMethod = ChosenMethod::where('mid','=',10)->where('id','=',Session::get('scrId'))->first();
		//$chMethod->text = $str;

		$request = Request::create('selector', 'GET', array());
		return Route::dispatch($request)->getContent();
	}

	public function doMethod26()
	{
		$array = Input::get('checkgroup');
		$str = Input::get('text1');
		$str = $str.' '.Input::get('text2');
		foreach($array as $box){
			$str = $str.' '.$box;
		}

		$str = $str.' '.Input::get('custom');

		$str = $str.' '.Input::get('text3');

		$chMethod = new ChosenMethod;
		$chMethod->mid = 26;
		//$chMethod->id = Session::get('scrId');
		$chMethod->id = 1;
		$chMethod->text = $str;
		$chMethod->save();

		//$chMethod = ChosenMethod::where('mid','=',26)->where('id','=',Session::get('scrId'))->first();
		//$chMethod->text = $str;

		$request = Request::create('selector', 'GET', array());
		return Route::dispatch($request)->getContent();
	}

	public function doMethod23()
	{
		$str = Input::get('text');
		
		$chMethod = new ChosenMethod;
		$chMethod->mid = 23;
		//$chMethod->id = Session::get('scrId');
		$chMethod->id = 1;
		$chMethod->text = $str;
		$chMethod->save();

		//$chMethod = ChosenMethod::where('mid','=',23)->where('id','=',Session::get('scrId'))->first();
		//$chMethod->text = $str;

		$request = Request::create('selector', 'GET', array());
		return Route::dispatch($request)->getContent();
	}

	public function doMethod24()
	{
		$str = Input::get('text1');
		$str = $str.' '.Input::get('text2');

		$chMethod = new ChosenMethod;
		$chMethod->mid = 24;
		//$chMethod->id = Session::get('scrId');
		$chMethod->id = 1;
		$chMethod->text = $str;
		$chMethod->save();

		//$chMethod = ChosenMethod::where('mid','=',24)->where('id','=',Session::get('scrId'))->first();
		//$chMethod->text = $str;

		$request = Request::create('selector', 'GET', array());
		return Route::dispatch($request)->getContent();
	}

	public function doMethod27()
	{
		
		$str = Input::get('text');

		$chMethod = new ChosenMethod;
		$chMethod->mid = 27;
		//$chMethod->id = Session::get('scrId');
		$chMethod->id = 1;
		$chMethod->text = $str;
		$chMethod->save();

		//$chMethod = ChosenMethod::where('mid','=',27)->where('id','=',Session::get('scrId'))->first();
		//$chMethod->text = $str;

		$request = Request::create('selector', 'GET', array());
		return Route::dispatch($request)->getContent();
	}

	/*public function showEdit()
	{
		$meth = Input::get('meth');
		$method = Method::where('mid', '=', $meth)->first();
		$subsection = Subsection::where('ssid', '=', $method->ssid)->first();
		$section = Section::where('sid', '=', $subsection->sid)->first();
		$array = array('method'=>$method, 'subsection'=>$subsection, 'section'=>$section);

		if($meth === '27'){
			return View::make('editables/method27')->with('array', $array);
		}
<<<<<<< HEAD
		return View::make('edit')->with('arr',$arr);
	}*/

	public function showEdit()
    {
        $meth = Input::get('meth');
        $method = Method::where('mid', '=', $meth)->first();
        $subsection = Subsection::where('ssid', '=', $method->ssid)->first();
        $section = Section::where('sid', '=', $subsection->sid)->first();
        $array = array('method'=>$method, 'subsection'=>$subsection, 'section'=>$section);

        if($meth==='7'){
        	return View::make('editables/method7')->with('array',$array);
        }
        else if($meth==='19'){
        	return View::make('editables/method19')->with('array',$array);
        }
        else if($meth==='20'){
        	return View::make('editables/method20')->with('array',$array);
        }
        else if($meth==='25'){
        	return View::make('editables/method25')->with('array',$array);
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
		else if($meth === '27'){
			return View::make('editables/method27')->with('array', $array);
		}


 
        return View::make('edit')->with('array',$array);
    }

    public function toEdit()
    {
    	$meth = Input::get('meth');
        $method = Method::where('mid', '=', $meth)->first();
        $subsection = Subsection::where('ssid', '=', $method->ssid)->first();
        $section = Section::where('sid', '=', $subsection->sid)->first();
        $array = array('method'=>$method, 'subsection'=>$subsection, 'section'=>$section);

        if($meth==='7'){
        	return View::make('editables/method7')->with('array',$array);
        }
        else if($meth==='19'){
        	return View::make('editables/method19')->with('array',$array);
        }
        else if($meth==='20'){
        	return View::make('editables/method20')->with('array',$array);
        }
        else if($meth==='25'){
        	return View::make('editables/ethod25')->with('array',$array);
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
		return View::make('edit');
	}

	public function showView()
	{
		return View::make('view');
	}

	public function showPreview()
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
		return View::make('preview')->with('arr',$arr);
	}
}
