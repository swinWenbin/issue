<?php

class ProjectsController extends BaseController {

	protected $project;

	public function __construct(Project $project)
	{
		$this->project = $project;
	}

	public function index()
	{
		if(Auth::user())
		{
			$projects = $this->project->all();

			return View::make('projects.index', compact('projects'));
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
			return View::make('projects.create');
		}
		else
		{
			return Redirect::to('/login');
		}
	}



	public function store()
	{
		$input = Input::all();

		$v = Validator::make($input, Project::$rules);

		if($v->passes())
		{
			// $this->project->create($input);
			$project = new Project;
			$project->title = Input::get('title');
			$project->proj_desc = Input::get('proj_desc');
			$project->save();

			return Redirect::route('projects.index');
		}

		return Redirect::route('projects.create')
			->withInput()
			->withErrors($v)
			->with('message', 'There were validation errors');
	}



	public function show($id)
	{
		if(Auth::user())
		{
			$project = $this->project->findOrFail($id);

			return View::make('projects.show', compact('project'));
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
			$project = $this->project->find($id);

			if(is_null($project))
			{
				return Redirect::route('projects.index');
			}

			return View::make('projects.edit', compact('project'));
		}
		else
		{
			return Redirect::to('/login');
		}
	}



	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$v = Validator::make($input, Project::$rules);

		if($v->passes())
		{
			$project = $this->project->find($id);
			$project->update($input);

			return Redirect::route('projects.show', $id);
		}

		return Redirect::route('projects.edit', $id)
			->withInput()
			->withErrors($v)
			->with('message', 'There were validation errors.');
	}



	public function destroy($id)
	{
		if(Auth::user())
		{
			$this->project->find($id)->delete();

			return Redirect::route('projects.index');
		}
		else
		{
			return Redirect::to('/login');
		}
	}
}
