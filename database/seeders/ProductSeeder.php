<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo 50 sản phẩm giả
        for ($i = 0; $i < 20; $i++) {
            Product::create([
                'name' => fake()->name(), // Tên sản phẩm ngẫu nhiên
                'image' => fake()->imageUrl(), // Đường dẫn ảnh giả
                'price' => fake()->randomFloat(2, 10, 1000), // Giá sản phẩm ngẫu nhiên
                'view' => fake()->numberBetween(0, 100), // Lượt xem ngẫu nhiên
                'quantity' => fake()->numberBetween(1, 100), // Số lượng ngẫu nhiên
                'category_id' => Category::inRandomOrder()->first()->id, // Lấy ngẫu nhiên id của một danh mục
            ]);
        }
    }
}
