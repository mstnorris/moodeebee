<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
                'name' => 'Mike',
                'username' => 'mstnorris',
                'email' => 'mstnorris@gmail.com',
                'password' => 'password'
			]);
            User::create([
                'name' => 'Holly',
                'username' => 'hjmcnicol',
                'email' => 'holly.mcnicol@live.co.uk',
                'password' => 'password'
            ]);
		}
	}

}