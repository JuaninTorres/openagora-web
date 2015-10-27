<?php

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'role' => $faker->title,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'password' => 'pass',
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Contact::class, function(Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'company' => $faker->company,
        'role' => $faker->title,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'message' => $faker->paragraph()
    ];
});