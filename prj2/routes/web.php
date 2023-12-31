<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/product/{id}',function (){
});
Route::get('/product-detail',function (){
    return view('product_detail');
});
Route::get('/bill',function (){
    return view('bill');
});
Route::get('/success',function (){
    return view('success');
});
Route::get('/stores',function (){
    return view('stores');
});
Route::get('/contact',function (){
    return view('contact');
});
//login
Route::get('/login-customer', [\App\Http\Controllers\CustomerController::class,'login'])->name('customers.login');
Route::post('/login-customer', [\App\Http\Controllers\CustomerController::class,'loginProcess'])->name('customers.loginProcess');
//logout
Route::get('/logout-customer',[\App\Http\Controllers\CustomerController::class, 'logout'])->name('customers.logout');

Route::middleware('checkLoginCustomer')->prefix('/categories')->group(function () {
    //Route read
    Route::get('/', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
    //route hiển thị form thêm brand
    Route::get('/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
    //route thêm dữ liệu lên db
    Route::post('/create', [\App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
    //Route hiển thị form sửa
    Route::get('/{category}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    //Route update dl
    Route::put('/{category}/edit', [\App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    //Route để xoá
    Route::delete('/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
});

Route::prefix('/products')->group(function () {
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('/create', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::get('/{product}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{product}/edit', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::delete('/{product}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
});


