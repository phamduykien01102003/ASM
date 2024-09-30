<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // 'name' => $this->fake()->name, // Sử dụng tên sản phẩm giả
            // 'image' => fake()->imageUrl(), // Đường dẫn ảnh giả
            // 'price' => fake()->randomFloat(2, 10, 1000), // Giá sản phẩm ngẫu nhiên
            // 'view' => fake()->numberBetween(0, 100), // Lượt xem ngẫu nhiên
            // 'quantity' => fake()->numberBetween(1, 100), // Số lượng ngẫu nhiên
            // 'category_id' => Category::factory(), // Sử dụng factory cho category để lấy id danh mục
        ];
    }
}
