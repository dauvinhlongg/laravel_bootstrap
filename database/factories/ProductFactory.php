<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;
use Faker\Generator as Faker;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition()
    {
        $imageURL = $this->faker->imageUrl(450, 300);
    
    // Lấy danh sách các id của các danh mục
    $categoryIds = Category::pluck('id');

    // Chọn ngẫu nhiên một id từ danh sách các id của các danh mục
    $categoryId = $categoryIds->random();

    return [
        'slide_url' => $imageURL,
        'title' => $this->faker->name(),
        'price' => $this->faker->numberBetween(100, 10000),
        'category_id' => $categoryId,
    ];
    }
}