<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;
use App\Http\Controllers\RecipeController;

//Show Index(main) Page
Route::get('/', [RecipeController::class, 'index']);

//Show Index(main) Page
Route::get('recipes-page', [RecipeController::class, 'recipesPage']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');