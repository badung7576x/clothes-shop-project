<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Modules\Product\Entities\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->text($maxNbChars = 20),
        'price' => $faker->numerify(' ### $'),
        'category_id' => $faker->numberBetween($min = 1, $max = 5),
        'quantity' => $faker->numberBetween($min = 1, $max = 100),
        'status' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
