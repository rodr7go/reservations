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
    static $password;

    return [
        'name'            => $faker->name,
        'last_name_1'     => $faker->lastName,
        'last_name_2'     => $faker->lastName,
        'email'           => $faker->unique()->safeEmail,
        'username'        => $faker->userName,
        'phone'           => $faker->phoneNumber,
        'mobile'          => $faker->phoneNumber,
        'password'        => $password ?: $password = bcrypt('secret'),
        'remember_token'  => str_random(10),
        'active'          => $faker->boolean(),
        'street_address'  => $faker->streetName,
        'colony'          => $faker->streetName,
        'exterior_number' => $faker->buildingNumber,
        'interior_number' => $faker->buildingNumber,
        'postal_zip'      => $faker->postcode,
        'city'            => $faker->city,
        'state'           => $faker->state,
        'role' => $faker->randomElement($array = array ('user','employee'))


    ];
});
