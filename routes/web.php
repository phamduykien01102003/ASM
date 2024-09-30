<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//client
Route::get('/', function () {
    return view('client.index');
})->name('index');
Route::get('shop-single', function () {
    return view('client.shop-single');
})->name('shop-single');
Route::get('shop', function () {
    return view('client.shop');
})->name('shop');
Route::get('about', function () {
    return view('client.about');
})->name('about');
Route::get('contact', function () {
    return view('client.contact');
})->name('contact');


//admin
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');


// Route::get('admin/categoryList', function () {
//     return view('admin.categories.list');
// })->name('categories.list');

// Route::get('admin/categoryCreate', function () {
//     return view('admin.categories.create');
// })->name('categories.create');

// Route::get('admin/productList', function () {
//     return view('admin.products.list');
// })->name('products.list');
// Route::get('admin/productCreate', function () {
//     return view('admin.products.Create');
// })->name('products.create');


Route::resource('admin/categories', CategoryController::class)->names([
    'index' => 'admin.categories.index',
    'create' => 'admin.categories.create',
    // 'store' => 'admin.categories.store',
]);

Route::resource('admin/products', ProductController::class)->names([
    'index' => 'admin.products.index',
   
]);



