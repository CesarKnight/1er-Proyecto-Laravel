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
    Route::get('categories/create','create')->name('categories.create');
    Route::post('categories','store') -> name('categories.store');
    Route::get('categories/{category}', 'show')->name('categories.show');
    Route::get('categories/{category}/edit','edit')->name('categories.edit'); 
    Route::put('categories/{category}','update')->name('categories.update');

    // hay diferentes metodos para diferenetes cosas, para crear objetos
    // se debe usar post y para actualizar objetos se usa put
});
