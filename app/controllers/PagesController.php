<?php

class PagesController extends BaseController {


	public function tapa()
	{
		return View::make('pages.tapa');
	}
    
	public function index()
	{
		return View::make('pages.index');
	}

	public function about()
	{
		return View::make('pages.about');
	}

	public function who()
	{
		return View::make('pages.who');
	}


	public function dashboard()
	{
		if(Auth::user())
		{
			$high = Issue::where('priority_id', '1')->get();
			$medium = Issue::where('priority_id', '2')->get();
			$low = Issue::where('priority_id', '3')->get();

			return View::make('pages.dashboard')->with(array('high' => $high, 'medium' => $medium, 'low' => $low));
		}
		else
		{
			return Redirect::to('/login');
		}
	}

	public function dashboard_medium()
	{
		if(Auth::user())
		{
			$high = Issue::where('priority_id', '1')->get();
			$medium = Issue::where('priority_id', '2')->get();
			$low = Issue::where('priority_id', '3')->get();

			return View::make('pages.dashboard_medium')->with(array('high' => $high, 'medium' => $medium, 'low' => $low));
		}
		else
		{
			return Redirect::to('/login');
		}
	}

	public function dashboard_low()
	{
		if(Auth::user())
		{
			$high = Issue::where('priority_id', '1')->get();
			$medium = Issue::where('priority_id', '2')->get();
			$low = Issue::where('priority_id', '3')->get();

			return View::make('pages.dashboard_low')->with(array('high' => $high, 'medium' => $medium, 'low' => $low));
		}
		else
		{
			return Redirect::to('/login');
		}
	}

	public function login()
	{
		if(!Auth::user())
		{
			return View::make('pages.login');
		}
		else
		{
			return Redirect::to('dashboard');
		}
	}

	public function post_login()
	{
		$input = Input::all();

		$rules = array(
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required'
		);

		$v = Validator::make($input, $rules);

		if($v->fails())
		{
			return Redirect::to('/login')->withErrors($v);
		}
		else
		{
			$credentials = array(
				'username' => $input['username'],
				'email' => $input['email'],
				'password' => $input['password']
			);

			if(Auth::attempt($credentials))
			{
				return Redirect::to('dashboard');
			}
			else
			{
				return Redirect::to('login');
			}
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}