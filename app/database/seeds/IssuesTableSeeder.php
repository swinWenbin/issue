<?php

class IssuesTableSeeder extends Seeder {

	public function run()
	{
		Issue::truncate();

		$faker = Faker\Factory::create();


		foreach(range(1, 30) as $index)
		{
			Issue::create([
				'issue_title' 	=> $faker->sentence(4),
				'issue_desc' 	=> $faker->paragraph(3)
			]);
		}
	}

}