<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250); // Tạo trường 'Name Product'
            $table->string('image')->nullable(); // Tạo trường 'Image'
            $table->decimal('price', 10, 2); // Tạo trường 'Price' với định dạng số thập phân
           
            $table->integer('view')->default(0); // Tạo trường 'view' với giá trị mặc định là 0
            $table->integer('quantity'); // Tạo trường 'quantity'
            $table->foreignIdFor(Category::class)->constrained()->onDelete('cascade');; // Tạo trường 'Category' với khóa ngoại

            $table->timestamps();// Tạo các trường 'created_at' và 'updated_at'
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
