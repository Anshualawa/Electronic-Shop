<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use Illuminate\Http\Request;
use App\Models\AllProduct;

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

Route::get('go-back', [Products::class, 'backbtn'])->name('back');

Route::get('products', [Products::class, 'home'])->name('home');

Route::get('products-mobile', [Products::class, 'Mobile'])->name('mobile');
Route::get('products-laptop', [Products::class, 'laptop'])->name('laptop');
Route::get('products-tvs', [Products::class, 'tvs'])->name('tvs');
Route::get('products-accessories', [Products::class, 'accessories'])->name('accessories');
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



// image upload 
Route::get('img-upload', function () {
    return view('image');
});


Route::post('img-upload', function (Request $request) {
    echo '<pre>';
    print_r($request->toArray());
    exit;
    if ($request->file('image')) {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('img/', $filename);
    }
    return redirect()->back()->with('status', 'File Upload success');
});


// payment method 
Route::get('pay-method{id}', [Products::class, 'Payment'])->name('payment');

// Seller Products details
Route::get('my-all-product-Details{id}', [Products::class, 'productDetail'])->name('productDetail');
