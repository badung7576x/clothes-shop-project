<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //factory(Modules\Product\Entities\Category::class, 20)->create();
         $data = [

            ['name' => 'Man ',],
            ['name' => 'Woman ',],
            ['name' => 'Kids ',],
            ['name' => 'Accessories ',],
            ['name' => 'Prices ',],
           
        ];
        DB::table('categories')->insert($data);
         
    }
}
