<?php

class UsersController extends \BaseController {

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function index()
	{
		if(Auth::user())
		{
			$users = $this->user->all();

			return View::make('users.index', compact('users'));
		}
		else
		{
			return Redirect::to('/login');
		}
	}

	public function create()
	{
		if(Auth::user())
		{
			return View::make('users.create');
		}
		else
		{
			return Redirect::to('/login');
		}
	}

	public function store()
	{
		$input = Input::all();

		$v = Validator::make($input, User::$rules);

		if($v->passes())
		{
			$this->user->create($input);

			return Redirect::route('users.index');
		}

		return Redirect::route('users.create')
			->withInput()
			->withErrors($v)
			->with('message', 'There were validation errors');
	}

	public function show($id)
	{
		if(Auth::user())
		{
			$user = $this->user->findOrFail($id);

			return View::make('users.show', compact('user'));
		}
		else
		{
			return Redirect::to('/login');
		}
	}

	public function edit($id)
	{
		if(Auth::user())
		{
			$user = $this->user->find($id);

			if(is_null($user))
			{
				return Redirect::route('users.index');
			}

			return View::make('users.edit', compact('user'));
		}
		else
		{
			return Redirect::to('/login');
		}
	}

	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$v = Validator::make($input, User::$rules);

		if($v->passes())
		{
			$user = $this->user->find($id);
			$user->update($input);

			return Redirect::route('users.show', $id);
		}

		return Redirect::route('users.edit', $id)
			->withInput()
			->withErrors($v)
			->with('message', 'There were validation errors.');
	}

	public function destroy($id)
	{
		if(Auth::user())
		{
			$this->user->find($id)->delete();

			return Redirect::route('users.index');
		}
		else
		{
			return Redirect::to('/login');
		}
	}

}
