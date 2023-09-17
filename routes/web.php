<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\categoriesController;

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

Route::get('/', HomepageController::class)->name('homepage');

Route::controller(CategoriesController::class)->group(function(){
    Route::get('categories','index')->name('categories.index'); 
    Route::get('categories/search', 'search')->name('categories.search');
    Route::get('categories/{id}', 'show')->name('categories.show');
});
