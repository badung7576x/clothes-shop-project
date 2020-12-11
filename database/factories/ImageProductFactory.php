<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Modules\Product\Entities\ImageProduct;
use Faker\Generator as Faker;

$factory->define(ImageProduct::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween($min = 1, $max = 100),
        'url' => $faker->imageUrl($width = 550, $height = 750),
        'size' => $faker->numerify('### x ###'),
        'type' => $faker->randomElement($array = array ('Title','Avatar','Banner','Poster','Slider')),
    ];
});
