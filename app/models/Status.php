<?php

	class Status extends Eloquent
	{
		public $timestamps = false;

		protected $guarded = array();
		

		protected $table = 'status';
		protected $primaryKey = 'id';

		public function issues() {
			return $this->hasMany('Issue');
		}	
	}