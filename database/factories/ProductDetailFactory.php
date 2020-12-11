<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Modules\Product\Entities\ProductDetail;
use Faker\Generator as Faker;

$factory->define(ProductDetail::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween($min = 1, $max = 100),
        'information' => $faker->realText($maxNbChars = 200),
    ];
});
