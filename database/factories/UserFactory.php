<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [

    	'first_name' => $faker->firstNameMale ,
        'last_name' => $faker->lastName ,
        'date_of_birthday' => $faker->dateTime ,
        'address1' => $faker->address ,
        'address2' => $faker->address ,
      	'city' => $faker->city ,
        'zipcode' => $faker->postcode ,
        'avatar' => $faker->unique()->imageUrl($width = 50, $height = 50 ,'people'), 
       	'phone' => $faker->e164PhoneNumber , 
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'type_account' => rand(0,3) ,
        'remember_token' => str_random(10),
    ];
});
