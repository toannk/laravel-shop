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

/**
 * Admin
 * @var \Illuminate\Database\Eloquent\Factory $factory
 */
$factory->define(App\Models\Admin::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
        'status' => 1,
    ];
});

/**
 * User
 * @var \Illuminate\Database\Eloquent\Factory $factory
 */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password' => bcrypt('123456'),
		'remember_token' => str_random(10),
		'status' => 1,
	];
});
