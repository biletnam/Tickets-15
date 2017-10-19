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

$factory->define(
    App\User::class,
    function (Faker $faker) {
        static $password;

        return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    }
);

$factory->define(
    App\Category::class,
    function (Faker $faker) {
        static $password;

        return [
            'name' => $faker->word,
            'slug' => $faker->slug(2),
        ];
    }
);
$factory->define(
    App\Ticket::class,
    function (Faker $faker) {
        static $password;

        return [
            'title' => $faker->paragraph,
            'body' => $faker->paragraph(5),
            'image' => $faker->imageUrl('64', '64'),
            'status_id' => function () {
                return \App\Status::all()->random(1)->first()->id;
            },
            'category_id' => function () {
                return \App\Category::all()->random(1)->first()->id;
            },
        ];
    }
);
