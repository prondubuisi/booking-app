<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $firstName = $faker->firstName;
    return [
        'first_name' => $firstName,
        'last_name' => $faker->lastName,
        'user_name' => $faker->unique()->firstName,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Client::class, function (Faker $faker) {
    $firstName = $faker->firstName;
    return [

        'title' => $faker->title(),
        'name' => $firstName,
        'last_name' => $faker->lastName,
        'address' => $faker->streetAddress,
        'zip_code' => $faker->postcode ,
        'city' => $faker->city,
        'state' => $faker->state,
        'email' => $faker->unique()->safeEmail,
       
    ];
});



