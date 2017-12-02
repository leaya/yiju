<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(TCG\Voyager\Models\Category::class, function (Faker $faker) {
    $time = Carbon::now()->toDateTimeString();
    return [
        'name' => $faker->word,
        'slug' => $faker->slug(2),
        'created_at' => $time,
        'updated_at' => $time,
    ];
});
