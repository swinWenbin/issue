<?php

	class Issue extends Eloquent
	{
		public $timestamps = false;

		protected $guarded = array();
		public static $rules = array(
			'issue_title' => 'required',
			'issue_desc' => 'required',
		    'status_id' => 'required',
			'priority_id' => 'required',
			'project_id' => 'required'
			);

		protected $table = 'issues';
		protected $primaryKey = 'id';

		
		public function priority() {
			return $this->belongsTo('Priority');
		}

		public function status() {
			return $this->belongsTo('Status');
		}

		public function users() {
		 	return $this->belongsToMany('User', 'issue_user', 'issue_id', 'user_id');
		 }



// public function users()
		// {
		// 	return $this->hasMany('User');
		// }



	}