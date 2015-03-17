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

            $profiles[] = [
            	'id' => $profileId,
            	'first_name' => $faker->firstName(),
            	'last_name' => $faker->lastName(),
            	'dob' => $faker->unixTime(),
            	'bio' => "<p>" . implode("</p><p>", $faker->paragraphs(3)) . "</p>",
            	'profile_image' => $faker->imageUrl(640, 480, 'people')
            ];

            $users[] = [
            	'email' => $faker->email(),
            	'name' => $faker->name(),
            	'password' => bcrypt($faker->password()),
            	'profile_id' => $profileId
            ];
        }

        DB::table('profiles')->insert($profiles);
        DB::table('users')->insert($users);

    }

}
