<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\User\SubcategoryController as UserSubCat;

// use App\Http\Controllers\User\SubcategoryController as UserSubcategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Route::get('/', function () {
//     return view('layouts.user.home');
// })->middleware('auth','user');
Route::get('/', function () {
    $categories = Category::all();
    $subcategories = Subcategory::with('category')->get();
    $brandsImages=Brand::select('image')->get();
    // send data to login page
    view('layouts.user.main')->with(['categories'=>$categories,'subcategories'=>$subcategories,'brandsImages'=>$brandsImages]);
    return view('layouts.user.main',compact('categories','subcategories','brandsImages'));
});


Auth::routes();

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    // 'namespace' => 'Admin', // this is the default
    'middleware' => ['auth', 'admin']
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::delete('products/{id}/delete', [ProductController::class, 'deleteImage'])->name('products.deleteImage');
    Route::get('products/{id}/create-offer', [ProductController::class, 'createOffer'])->name('products.createOffer');
    Route::Post('products/add-offer', [ProductController::class, 'addOffer'])->name('products.addOffer');
    Route::resource('products',ProductController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubcategoryController::class);
    Route::resource('offers', OfferController::class);
});








Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    // 'namespace' => 'User',
    'middleware' => ['auth','user']
], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('carts', CartController::class);
    Route::resource('subcategories', UserSubCat::class);
    Route::get('product/view/{id}', [App\Http\Controllers\User\ProductController::class, 'view'])->name('product.view');

});
// Route::resource('subcategories', UserSubCat::class);
// Route::group([
//     // 'prefix' => 'user',
//     'as' => 'user.',
//     // 'namespace' => 'User',
//     'middleware' => ['guest']
// ], function () {

//     Route::get('/', [HomeController::class, 'index'])->name('home');
//     Route::resource('subcategories', UserSubCat::class);

// });

