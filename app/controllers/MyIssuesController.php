<?php

class MyIssuesController extends \BaseController {

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
// 			$issues = $this->issue->all();
// 			$issues = DB::table('issue_user')
// 				->join('users', 'issue_user.user_id', '=', 'users.id')
// 				->join('issues', 'issue_user.issue_id', '=', 'issues.id')
// 				->where('user_id', '=', Auth::user()->id)
// 				->select('*')
// 				->get();
            
            $issues = Issue::whereHas('users', function($query) {
                $query->where('user_id', Auth::user()->id);
            })->get();
            
			//return View::make('issues.index', compact('issues'));
			return View::make('myIssues.index')->with('issues', $issues);
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
			return View::make('issues.create');
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

		$v = Validator::make($input, Issue::$rules);

		if($v->passes())
		{
			$this->issue->create($input);

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
