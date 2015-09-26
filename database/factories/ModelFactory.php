<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->userName,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Recipe::class, function (Faker\Generator $faker) {
    return [
        'user_id'       => factory('App\User')->create()->id,
        'title' 		=> str_random(10),
        'image' 		=> str_random(10) .'.jpg',
        'summary' 		=> $faker->sentence(10),
        'quantity' 		=> $faker->randomDigitNotNull,
        'ingredients' 	=> str_random(10),
        'directions' 	=> $faker->paragraphs(2, true),
        'course' 		=> str_random(10),
        'type' 			=> str_random(10),
    ];
});