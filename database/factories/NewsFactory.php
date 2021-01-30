<?php

/** @var Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Mediabroker\Core\Models\Language;
use Mediabroker\Core\Models\News;

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

$factory->define(News::class, function (Faker $faker) {
    $content = [];

    foreach (Language::activeLocales() as $locale) {
        $content[$locale] = "<div>{$faker->text}</div>";
    }

    return [
        'name' => $faker->name,
        'content' => $content,
        'status' => $faker->randomElement([News::STATUS_ACTIVE, News::STATUS_INACTIVE]),
        'published_at' => $faker->dateTime(),
    ];
});
