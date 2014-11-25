<?php

class IssueController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$issues = Issue::all();

		// load the view and pass the issues
		return View::make('issue.index')
			->with('issues', $issues);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('issue.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'issue_title'       => 'required',
			'issue_desc'      => 'required',
			'status_id' => 'required|numeric',
			'priority_id' => 'required|numeric',
			'related_project' => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('issues/create')
				->withErrors($validator);
			
		} else {
			// store
			$issue = new Issue;
			$issue->issue_title      = Input::get('issue_title');
			$issue->issue_desc      = Input::get('issue_desc');
			$issue->status_id = Input::get('status_id');
			$issue->priority_id = Input::get('priority_id');
			$issue->related_project= Input::get('related_project');
			$nerd->save();

			// redirect
			Session::flash('message', 'Successfully created issue!');
			return Redirect::to('issues');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$issue = Issue::find($id);

		// show the view and pass the issue to it
		return View::make('issue.show')
			->with('issue', $issue);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$issue = Issue::find($id);

		// show the edit form and pass the issue
		return View::make('issue.edit')
			->with('issue', $issue);
	}
	


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'issue_title'       => 'required',
			'issue_desc'      => 'required',
			'status_id' => 'required|numeric',
			'priority_id' => 'required|numeric',
			'related_project' => 'required|numeric'
			
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('issues/' . $id . '/edit')
				->withErrors($validator);
				
		} else {
			// store
			$issue = Issue::find($id);
			$issue->issue_title  = Input::get('issue_title');
			$issue->issue_desc   = Input::get('issue_desc');
			$issue->status_id = Input::get('status_id');
			$issue->priority_id = Input::get('priority_id');
			$issue->related_project= Input::get('related_project');
			$issue->save();

			// redirect
			Session::flash('message', 'Successfully updated issue!');
			return Redirect::to('issues');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$issue = Issue::find($id);
		$issue->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the issue!');
		return Redirect::to('issues');
	}
	
	public function assignUser($userid,$issue_id){
		
		$issue = Issue::find($issue_id);
		$issue->userIssues()->attach($userid); 
	
	}

	public function unAssignUser($userid,$issue_id){
		
		$issue = Issue::find($issue_id);
		$issue->userIssues()->detach($userid); 
	
	}	

    public function getIssueWithRespectiveUsers($issue_id){
    		$issue = Issue::find($issue_id);
			$issue->userIssues()->all();
		
    }


   public function retrieveIssueUsers(){
   	
	$issueusers = Issue::find(1)->userIssues;
	return View::make('issue.userissuelist')
			->with('issues', $issueusers);
   }
     





}


