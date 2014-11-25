<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();

		$faker = Faker\Factory::create();

		User::create([
			'username' => 'stan',
			'email' => 'stan@gmail.com',
			'password' => Hash::make('1234'),
			'role_id' => 1
		]);

		User::create([
			'username' => 'wenbin',
			'email' => 'wenbin@gmail.com',
			'password' => Hash::make('1234'),
			'role_id' => 2
		]);

		User::create([
			'username' => 'guest',
			'email' => 'guest@gmail.com',
			'password' => Hash::make('1234'),
			'role_id' => 3
		]);

		foreach(range(4,10) as $index)
		{
			User::create([
				'username' => $faker->userName(),
				'email' => $faker->email(),
				'password' => Hash::make('1234'),
				'role_id' => 3
			]);
		}
	}

}