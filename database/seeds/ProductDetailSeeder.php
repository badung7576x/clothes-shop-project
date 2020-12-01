<?php

use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Modules\Product\Entities\ProductDetail::class, 100)->create();
    }
}
