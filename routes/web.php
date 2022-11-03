<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CustomerController;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout.master');
});

Route::resource('categories', CategoriController::class);

Route::resource('blogs', BlogController::class);

Route::resource('cities', CityController::class);

Route::resource('customers', CustomerController::class);
Route::get('/search', [CustomerController::class, 'search'])->name('customers.search');


Route::get('/filter', [CustomerController::class, 'filterByCity'])->name('customers.filterByCity');



Route::get('/hasmany', function(){
    $categories = Categorie::find(8);
        dd($categories->blogs->toArray());
});

Route::get('/belogto', function(){
    $blogs = Blog::find(22);
        dd($blogs->categories->toArray());
});

Route::get('/manytomany1', function(){
    $blogs = Blog::find(20);
        dd($blogs->ordes->toArray());
});

Route::get('/manytomany2', function(){
    $order = Order::find(1);
        dd($order->blogs->toArray());
});


