<?php

	class Role extends Eloquent
	{
		public $timestamps = false;

		protected $guarded = array();
		public static $rules = array(
			'title' => 'required'
			);

		protected $table = 'roles';
		protected $primaryKey = 'id';

		public function users()
		{
			return $this->hasMany('User');
		}
	}