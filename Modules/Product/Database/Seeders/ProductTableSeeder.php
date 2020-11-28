<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $data = [
            ['name' => Str::random(5),
            'price' => '21$',
            'category_id' => 'technology',
            'information' => Str::random(20),
            ],
            
            ['name' => Str::random(5),
            'price' => '23$',
            'category_id' => 'car',
            'information' => Str::random(20),
            ],

            ['name' => Str::random(5),
            'price' => '43$',
            'category_id' => 'machine',
            'information' => Str::random(20),
            ],

            ['name' => Str::random(5),
            'price' => '54$',
            'category_id' => 'book',
            'information' => Str::random(20),
            ],

            ['name' => Str::random(5),
            'price' => '23$',
            'category_id' => 'kitchen',
            'information' => Str::random(20),
            ],
        ];
        
        DB::table('products')->insert($data);
    }
}
