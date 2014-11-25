<?php

class IssuesController extends \BaseController {

	protected $issue;

	public function __construct(Issue $issue)
	{
		$this->issue = $issue;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::user())
		{
            $issues = Issue::all();
			return View::make('issues.index', compact('issues'));
		}
		else
		{
			return Redirect::to('/login');
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::user())
		{
			 $status = Status::lists('title', 'id');
			 $priority = Priority::lists('title','id');
			 $project = Project::lists('title','id');
		     return View::make('issues.create', ['status' =>$status, 'priority' =>$priority,'project' =>$project ]);
		}
		else
		{
			return Redirect::to('/login');
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$rules = array('issue_title'=>'required');

		$v = Validator::make($input, $rules);

		if($v->passes())
		{
			// $this->issue->create($input);
			$issue  = new Issue;
			$issue->issue_title = Input::get('issue_title');
			$issue->issue_desc = Input::get('issue_desc');
			$issue->status_id = Input::get('id');
			$issue->priority_id = Input::get('id');
			$issue->project_id = Input::get('id');
			$issue->save();
			return Redirect::route('issues.index');
		}

		return Redirect::route('issues.create')
			->withInput()
			->withErrors($v)
			->with('message', 'There were validation errors');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if(Auth::user())
		{
			$issue = $this->issue->findOrFail($id);

			return View::make('issues.show', compact('issue'));
		}
		else
		{
			return Redirect::to('/login');
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if(Auth::user())
		{
			$issue = $this->issue->find($id);

			if(is_null($issue))
			{
				return Redirect::route('issues.index');
			}

			return View::make('issues.edit', compact('issue'));
		}
		else
		{
			return Redirect::to('/login');
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$v = Validator::make($input, Issue::$rules);

		if($v->passes())
		{
			$issue = $this->issue->find($id);
			$issue->update($input);

			return Redirect::route('issues.show', $id);
		}

		return Redirect::route('issues.edit', $id)
			->withInput()
			->withErrors($v)
			->with('message', 'There were validation errors.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(Auth::user())
		{
			$this->issue->find($id)->delete();

			return Redirect::route('issues.index');
		}
		else
		{
			return Redirect::to('/login');
		}
	}
}
