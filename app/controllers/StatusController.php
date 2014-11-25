<?php

class StatusController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
			$statuses = Status::all();
			return View::make('status.index')
			->with('statuses', $statuses);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		//$status =Status::all();
		return View::make('status.create');
			//->with('statuses', $statuses);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
      $rules = array(

		'title'  => 'required'
			
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('status/create')
				->withErrors($validator);
				
		} else {
			// store
			$status = new Status;
			$status->title   = Input::get('title');
			$status->save();

			// redirect
			Session::flash('message', 'Successfully created Status!');
			return Redirect::to('status');
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
		$status = Status::find($id);

		// show the view and pass the nerd to it
		return View::make('status.show')
			->with('status', $status);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	$status = Status::find($id);

		// show the edit form and pass the nerd
		return View::make('status.edit')
			->with('status', $status);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			
			'title' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('status/' . $id . '/edit')
				->withErrors($validator);
				
		} else {
			// store
			$status = Status::find($id);
			$status->title      = Input::get('title');
			
			$status->save();

			// redirect
			Session::flash('message', 'Successfully updated status!');
			return Redirect::to('status');
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
		$status = Status::find($id);
		$status->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the status!');
		return Redirect::to('status');
	}


}
