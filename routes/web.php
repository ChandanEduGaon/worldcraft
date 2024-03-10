<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/team', [MainController::class, 'team'])->name('team');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/contact_us', [MainController::class, 'contact_us'])->name('contact_us');
Route::get('/our_products', [MainController::class, 'our_products'])->name('our_products');


Route::group(['prefix' => 'world_craft_admin' , 'as' => 'world_craft_admin.'], function () {
    Route::group(['prefix' => 'home' , 'as' => 'home.'], function () {
        Route::get('/', [\App\Http\Controllers\world_craft_admin\HomeController::class, 'index'])->name('list');
        Route::get('add', [\App\Http\Controllers\world_craft_admin\HomeController::class, 'create'])->name('add');
        Route::post('add_data', [\App\Http\Controllers\world_craft_admin\HomeController::class, 'store'])->name('add.data');
        Route::get('edit/{id}', [\App\Http\Controllers\world_craft_admin\HomeController::class, 'edit'])->name('edit');
    });

    Route::get('/', [\App\Http\Controllers\world_craft_admin\MainController::class, 'admin'])->name('/');
    Route::get('/admin', [\App\Http\Controllers\world_craft_admin\MainController::class, 'admin'])->name('dashboard');
    Route::get('/users', [\App\Http\Controllers\world_craft_admin\MainController::class, 'users'])->name('users');
    Route::get('/cms_header', [\App\Http\Controllers\world_craft_admin\MainController::class, 'cms_header'])->name('cms.header');

    Route::get('/', [\App\Http\Controllers\world_craft_admin\ProductController::class, 'index'])->name('our_products');

});
