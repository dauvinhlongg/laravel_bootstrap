<?php
// database/seeders/ProductCategorySeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        // Adding categories
        $giayCategory = Category::create(['name' => 'Giày']);
        $depCategory = Category::create(['name' => 'Dép']);

        // Adding products to categories
        $giayCategory->products()->create([
            'name' => 'Nike Air Max',
            'description' => 'Comfortable running shoes',
            'price' => 120.00,
        ]);

        $depCategory->products()->create([
            'name' => 'Adidas Slides',
            'description' => 'Comfortable sandals',
            'price' => 30.00,
        ]);
    }
}
