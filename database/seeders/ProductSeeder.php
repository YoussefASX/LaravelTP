<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
            Product::factory()->count(10)->create();

            // Add specific products
            Product::create([
                'name' => 'Laptop',
                'price' => 999.99,
                'stock' => 15,
            ]);
            Product::create([
                'name' => 'Smartphone',
                'price' => 499.99,
                'stock' => 30,
            ]);
            Product::create([
                'name' => 'Headphones',
                'price' => 79.99,
                'stock' => 50,
            ]);
            Product::create([
                'name' => 'Monitor',
                'price' => 199.99,
                'stock' => 20,
            ]);
            Product::create([
                'name' => 'Keyboard',
                'price' => 49.99,
                'stock' => 40,
            ]);
    }
}
