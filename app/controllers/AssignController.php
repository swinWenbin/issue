<?php

class AssignController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$issues= Issue::all()->users();
        $issues = Issue::all();
        //$issue = Issue::all()->with->("users");
        //$issues = Issue::with("users")->get();
        //$issues= Issue::users();
		//$issues = new Issue;
		//$issues->users();

        return View::make('assignUsers.index')->with('issues', $issues);
          
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$issues = Issue::lists('issue_title','id');	
		$users = User::lists('username','id');
		
			return View::make('assignUsers.create')->with(array('issues' => $issues, 'users' => $users));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$issue = new Issue;
			$user = new User;
			//$issue = Issue::find(Input::get('id'));
			//$user = User::find(Input::get('id'));
			//$issue = Issue::find(Input::get('issues.id'));
			//$user = User::find(Input::get('users.id'));	
			//$issue = Issue::find('issues.id');
			//$user = User::find('users.id');
			//$issue = Issue::find('id');
			//$user = User::find('id');
            //$issue = $issues->id;
            //$user = $users->id;
            $issue->id = Input::get('issueid');
            $user->id = Input::get('userid');
           // $issue->id = Issue::find(Input::get('issues.id'));
           // $user->id =  User::find(Input::get('users.id'));		
			// $issue->id = Issue::find(Input::get('id'));
          //  $user->id =  User::find(Input::get('id'));
			// $issue->id = Issue::find('id');
         //  $user->id =  User::find('id');	


			$issue->users()->attach($user);
		   
		   Session::flash('message', 'Successfully added user to Issue!');
			return Redirect::to('assign');

		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

		return View::make('assignUsers.edit', compact('issue'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{


		$issue = Issue::find($id);
		$user = new User;
		// $issue->id = Input::get('id');
            $user->id = Input::get('userid');

			$issue->users()->detach($user);
		   
		   Session::flash('message', 'Successfully removed user from Issue!');
			return Redirect::to('assign');
	}


   

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			//$issue = new Issue;
			//$user = new User;
			// $issue->id = Input::get('id');
           // $user->id = Input::get('userid');

			//$issue->users()->detach($user);
		   
		 // Session::flash('message', 'Successfully removed user from Issue!');
		//	return Redirect::to('assign');
	}
    
	public function getForm($id) {
		$issue = Issue::find($id);
		$users = User::lists('username', 'id');

		return View::make('issues.assign_users_form', ['issue' => $issue, 'users' => $users]);
	}

	public function postForm() {

		 $iss_id   = Input::get('issue_id');
		 $user_id = Input::get('userid');
		 
		 $iss_user = Issue::find($iss_id);
		 $iss_user->users()->attach($user_id);
		 

		return Redirect::to('assign'); 


	}
}
