<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showTest()
	{
		return View::make('test');
	}

	public function showLogin()
	{
		// show the form
		return View::make('login');
	}

	public function showDashboard()
	{
		/*$todo = Input::get('userAction');
		$thisscript= Input::get('script');

		if($todo === 'download'){

		}*/
		return View::make('dashboard');
	}

	public function doLogin()
	{
		Session::flush();
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
			} else {

			// create our user data for the authentication
				$userdata = array(
					'email' 	=> Input::get('email'),
					'password' 	=> Input::get('password')
					);

			// attempt to do the login
				if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');

					return Redirect::to('dashboard');

				} else {	 	

				// validation not successful, send back to form	
					return Redirect::to('login');

				}

			}
		}

		public function doLogout(){
			Auth::logout(); // log the user out of our application
			Session::flush();
			return Redirect::to('login'); // redirect the user to the login screen
		}

		public function loadDashboard(){
			if(isset($_POST['title'])){
				$title = null;
				if (Input::has('title')){
					$title = Input::get('title');
					$notes = Input::get('notes');
					$script = Script::where('id','=',Session::get('scrId'))->first();
					$script->name = $title;
					$script->notes = $notes;

					$script->save();

					Session::forget('scrId');
					Session::forget('arr');
					Session::forget('methList');
					Session::forget('intention');
				}
				else if(is_null($title)){
					echo "<script>alert('Please enter a title!')</script>";
					$request = Request::create('preview', 'GET', array());
					return Route::dispatch($request)->getContent();
				}
			}
			else{
				// echo "<script>alert('no post');</script>";
			}
				// elseif(!is_null(Session::get('arr'))){
				// 	echo "<script>bootbox.alert('Please enter a title.');</script>";
				// 	$request = Request::create('preview', 'GET', array());
				// 	return Route::dispatch($request)->getContent();
				// }
				if(Auth::check()){
					$name = Auth::user()->name;
					if(Input::has('script')){
						$scriptid = Input::get('script');
						$currScript = Script::where('id', '=', $scriptid)->first();
						$scriptname = $currScript->name;
						Session::put('scrName', $scriptname);
						if(Input::get('actions') === "Delete"){
							ChosenMethod::where('id', '=', $scriptid)->delete();
							Script::where('id', '=', $scriptid)->delete();
						}
						if(Input::get('actions') === "Edit"){
							Session::put('scrId',$scriptid);
							$request = Request::create('selector', 'GET', array());
							return Route::dispatch($request)->getContent();
						}
						if(Input::get('actions') === "Download"){
							$pathToFile = 'script_'.$scriptid.'.pdf';
							return Response::download($pathToFile);
						}
					}
					$scripts = Script::where('uid','=',Auth::user()->uid)->get();
					$emptyScript = Script::where('name','=','placeholder')->first();
					if(!is_null($emptyScript)){
						ChosenMethod::where('id','=',$emptyScript->id)->delete();
						Script::where('name','=','placeholder')->delete();
					}
					$array = array('scripts'=>$scripts,'name'=>$name);
					return View::make('dashboard')->with('array',$array);
				}
		}
	}
