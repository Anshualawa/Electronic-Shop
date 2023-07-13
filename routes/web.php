<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;

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
    return view('welcome');
});

// Mobile Phones

Route::get('products-mobile', [Products::class, 'Mobile'])->name('mobile');
Route::get('register', [Products::class, 'Register_'])->name('register');
Route::get('login', [Products::class, 'Login'])->name('login');
Route::post('register', [Products::class, 'Register'])->name('register');
Route::post('login', [Products::class, 'Login_'])->name('login');
Route::get('logout', [Products::class, 'LogOut'])->name('logout');

// upload Products
Route::get('upload-product', [Products::class, 'upload_product'])->name('prod_upload');
Route::post('upload-product', [Products::class, 'upload_product_'])->name('prod_upload');

// Addmin board 
Route::get('adminboard', [Products::class, 'Dashboard'])->name('admin');