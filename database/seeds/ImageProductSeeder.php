<?php

use Illuminate\Database\Seeder;

class ImageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Modules\Product\Entities\ImageProduct::class, 200)->create();
    }
}
