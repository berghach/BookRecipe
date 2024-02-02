<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recipeController;

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

Route::get('/', [recipeController::class,'index'])->name('recipe.index');
Route::get('/recipes/{recipe}/show', [recipeController::class,'showRecipe'])->name('recipe.show');
Route::get('/recipes/add', [recipeController::class, 'add'])->name('recipe.add');
Route::post('/recipes/store', [recipeController::class,'store'])->name('recipe.store');
Route::get('/recipes/{recipe}/edit', [recipeController::class,'edit'])->name('recipe.edit');
Route::put('/recipes/{recipe}/update', [recipeController::class,'update'])->name('recipe.update');
Route::delete('/recipes/{recipe}/delete', [recipeController::class,'delete'])->name('recipe.delete');
Route::get('/recipes/search', [recipeController::class,'search'])->name('recipe.search');
