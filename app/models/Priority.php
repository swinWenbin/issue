<?php

	class Priority extends Eloquent
	{
		protected $table = 'priority';

		//override primary key in eloquent!!!
		protected $primaryKey = 'id';

		public function issues() {
			return $this->hasMany('Issue');
		}
	}