<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name'=> 'Apple Macbook Pro 16',
                'details'=> 'Apple M1 Pro, 16 GB 512 GB SSD',
                'description'=> 'Verry Power Macbook',
                'brand'=> 'Apple',
                'price'=> 2499,
                'shipping_cost'=> 25,
                'image_path'=> 'storage/product.png'
            ],
            [
                'name'=> 'Samsung Galaxy Book Pro',
                'details'=> '13.3 inch, 8GB',
                'description'=> 'Very Powerfull Book',
                'brand'=> 'Samsung',
                'price'=> 1999,
                'shipping_cost'=> 25,
                'image_path'=> 'storage/product2.png'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
       
    }
}
