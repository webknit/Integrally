<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        $profiles = [];
        $users = [];
        foreach(range(1, 10) as $index)
        {
        	$profileId = $faker->unique()->randomNumber(3);
            $firstName = $faker->firstName();
            $lastName = $faker->lastName();
            $name = $firstName . " " . $lastName;

            $profiles[] = [
            	'id' => $profileId,
            	'first_name' => $firstName,
            	'last_name' => $lastName,
            	'dob' => $faker->dateTime(),
            	'bio' => "<p>" . implode("</p><p>", $faker->paragraphs(3)) . "</p>",
            	'profile_image' => $faker->imageUrl(480, 480, 'people'),
                'slug' => str_slug($name)
            ];

            $users[] = [
            	'email' => $faker->email(),
            	'name' => $name,
            	'password' => bcrypt($faker->password()),
            	'profile_id' => $profileId
            ];
        }

        DB::table('profiles')->insert($profiles);
        DB::table('users')->insert($users);

    }

}
