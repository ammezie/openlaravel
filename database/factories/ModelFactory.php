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

$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'project_url'=> $faker->url,
        'repo_url' => $faker->url,
        'short' => $faker->sentence,
        'description' => $faker->paragraph,
    ];
});
