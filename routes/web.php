<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Models\Recipe;

//Show Index(main) Page
Route::get('/', [RecipeController::class, 'index']);

//Store Recipe Data
Route::post('recipes-all', [RecipeController::class, 'store']);

//Show Recipes Page
Route::get('recipes-all', [RecipeController::class, 'recipesPage']);

//Show Single Recipe Page
 Route::get('recipe-single/{id}', function($id) {
    return view('recipes.recipe-single', [
        'recipe' => Recipe::find($id)
    ]);
}); 

//Show Create Recipe Form
Route::get('/recipes/create', [RecipeController::class, 'create'])->middleware('auth');

//Show Edit Recipe Form
Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])->middleware('auth');

//Update Recipe
Route::put('/recipe-single/{recipe}', [RecipeController::class, 'update'])->middleware('auth');

//Delete Recipe
Route::delete('/recipe-single/{recipe}', [RecipeController::class, 'destroy'])->middleware('auth');

//Show Register Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login ')->middleware('guest');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Manage Recipes
Route::get('/recipes/manage', [RecipeController::class, 'manage'])->middleware('auth');