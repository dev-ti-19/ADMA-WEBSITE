<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'nombre' => $faker->randomElement(['Casa habitacion', 'Hotel', 'Proyecto urbano', 'Hospital'])
    ];
});
