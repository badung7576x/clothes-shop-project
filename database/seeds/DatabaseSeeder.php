<?php

use Illuminate\Database\Seeder;
use Modules\Product\Entities\ProductDetail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ProductSeeder::class);
         $this->call(ProductDetailSeeder::class);
         $this->call(ImageProductSeeder::class);
         $this->call(CategorySeeder::class);
    }
}
