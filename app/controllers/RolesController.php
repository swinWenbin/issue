<?php

class RolesController extends BaseController {

	protected $role;

	public function __construct(Role $role)
	{
		$this->role = $role;
	}

	public function index()
	{
		if(Auth::user())
		{
			$roles = $this->role->all();

			return View::make('roles.index', compact('roles'));
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
			return View::make('roles.create');
		}
		else
		{
			return Redirect::to('/login');
		}
	}



	public function store()
	{
		$input = Input::all();

		$v = Validator::make($input, Role::$rules);

		if($v->passes())
		{
			$this->role->create($input);

			return Redirect::route('roles.index');
		}

		return Redirect::route('roles.create')
			->withInput()
			->withErrors($v)
			->with('message', 'There were validation errors');
	}



	public function show($id)
	{
		if(Auth::user())
		{
			$role = $this->role->findOrFail($id);

			return View::make('roles.show', compact('role'));
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
			$role = $this->role->find($id);

			if(is_null($role))
			{
				return Redirect::route('roles.index');
			}

			return View::make('roles.edit', compact('role'));
		}
		else
		{
			return Redirect::to('/login');
		}
	}



	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$v = Validator::make($input, Role::$rules);

		if($v->passes())
		{
			$role = $this->role->find($id);
			$role->update($input);

			return Redirect::route('roles.show', $id);
		}

		return Redirect::route('roles.edit', $id)
			->withInput()
			->withErrors($v)
			->with('message', 'There were validation errors.');
	}



	public function destroy($id)
	{
		if(Auth::user())
		{
			$this->role->find($id)->delete();

			return Redirect::route('roles.index');
		}
		else
		{
			return Redirect::to('/login');
		}
	}
}