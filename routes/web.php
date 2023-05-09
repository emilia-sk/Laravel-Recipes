<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;
use App\Http\Controllers\RecipeController;

//Show Index(main) Page
Route::get('/', [RecipeController::class, 'index']);

//Show Recipes Page
Route::get('recipes-all', [RecipeController::class, 'recipesPage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');