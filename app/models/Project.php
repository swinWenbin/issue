<?php

	class Project extends Eloquent
	{
		public $timestamps = false;

		protected $guarded = array();
		public static $rules = array(
			'title' => 'required'
			);

		protected $table = 'projects';
		protected $primaryKey = 'id';

		public function issues()
		{
			return $this->hasMany('Issue');
		}

		public function users()
		{
			return $this->belongsToMany('User', 'project_user', 'user_id', 'project_id');
		}
	}