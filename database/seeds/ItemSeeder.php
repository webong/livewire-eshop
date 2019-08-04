<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemSeeder extends Seeder
{
    public $items = [
        [
            'name' => 'Khaki Suede Polish Work Boots',
            'price' => 3400,
            'category' => 'women',
            'sale' => true,
            'article' => 'shoe',
            'img' => 'shoe1.png',
        ],
        [
            'name' => 'Camo Fang Backpack Jungle',
            'price' => 6300,
            'category' => 'women',
            'sale' => false,
            'article' => 'jacket',
            'img' => 'jacket1.png',
        ],
        [
            'name' => 'Parka and Quilted Liner Jacket',
            'price' => 9500,
            'category' => 'men',
            'sale' => true,
            'article' => 'jacket',
            'img' => 'jacket2.png',
        ],
        [
            'name' => 'Cotton Black Cap',
            'price' => 2500,
            'category' => 'men',
            'sale' => true,
            'article' => 'hats',
            'img' => 'hat1.png',
        ],
        [
            'name' => 'Knit Sweater with Zips',
            'price' => 5600,
            'category' => 'women',
            'sale' => false,
            'article' => 'sweater',
            'img' => 'sweater1.png',
        ],
        [
            'name' => 'Long Linen-blend Shirt',
            'price' => 7200,
            'category' => 'men',
            'sale' => false,
            'article' => 'shirt',
            'img' => 'shirt1.png',
        ],
        [
            'name' => 'Knit Orange Sweater',
            'price' => 6200,
            'category' => 'men',
            'sale' => false,
            'article' => 'sweater',
            'img' => 'sweater2.png',
        ],
        [
            'name' => 'Cotton Band-collar Blouse',
            'price' => 3400,
            'category' => 'men',
            'sale' => false,
            'article' => 'shirt',
            'img' => 'shirt2.png',
        ],
        [
            'name' => 'Camo Fang Backpack Jungle',
            'price' => 4400,
            'category' => 'women',
            'sale' => true,
            'article' => 'jacket',
            'img' => 'jacket3.png',
        ],
        [
            'name' => 'Golden Pilot Jacket',
            'price' => 9700,
            'category' => 'women',
            'sale' => false,
            'article' => 'jacket',
            'img' => 'jacket4.png',
        ],
        [
            'name' => 'Spotted Patterned Sweater',
            'price' => 8900,
            'category' => 'women',
            'sale' => false,
            'article' => 'jacket',
            'img' => 'sweater4.png',
        ],
        [
            'name' => 'Double Knit Sweater',
            'price' => 5900,
            'category' => 'men',
            'sale' => true,
            'article' => 'jacket',
            'img' => 'sweater5.png',
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = $this->items;
        
        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
