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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('en_US');
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'father_name' => $faker->name,
        'nrc_number' => $faker->word,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->address,
    ];
});
