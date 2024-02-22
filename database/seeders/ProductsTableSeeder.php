<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tạo dữ liệu demo
        $products = [
            [
                'name' => 'Sweater Pineapple',
                'price' => 140000,
                'img' => 'product-1.jpg',
            ],
            [
                'name' => 'Guangzhou Sweater',
                'price' => 130000,
                'img' => 'product-2.jpg',
            ],
            [
                'name' => 'Hanzi Sweater',
                'price' => 340000,
                'img' => 'product-3.jpg',
            ],
            [
                'name' => 'Microfiber Wool Scarf',
                'price' => 640000,
                'img' => 'product-4.jpg',
            ],
            [
                'name' => 'Men\'s Painted Hat',
                'price' => 440000,
                'img' => 'product-5.jpg',
            ],
            [
                'name' => 'Sweater Style',
                'price' => 340000,
                'img' => 'product-6.jpg',
            ],
            [
                'name' => 'Tactical Backpack',
                'price' => 640000,
                'img' => 'product-7.jpg',
            ],
            [
                'name' => '2 Layer Windbreaker',
                'price' => 440000,
                'img' => 'product-8.jpg',
            ],
            [
                'name' => 'Converse Shoes',
                'price' => 340000,
                'img' => 'product-9.jpg',
            ],
        ];

        // Lưu dữ liệu vào bảng products
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
