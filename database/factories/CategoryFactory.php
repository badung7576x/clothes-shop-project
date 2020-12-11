<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Modules\Product\Entities\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->bothify('Category ##??') ,
    ];
});
