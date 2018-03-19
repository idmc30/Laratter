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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Message::class, function(Faker $faker){ 
	//faker tienes metodos word  te da palabras 
	//paragraph te da parrafo
	//realText() te da texto del libro de alicia en el pais de las maravillas
           return [
               'content' =>$faker->realText(random_int(20,160)),
               'image' =>$faker->imageUrl(600,338)
           ];
        } );