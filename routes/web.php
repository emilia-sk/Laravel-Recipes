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
Route::get('/recipes/create', [RecipeController::class, 'create']);

//Show Edit Recipe Form
Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit']);

//Update Recipe
Route::put('/recipe-single/{recipe}', [RecipeController::class, 'update']);

//Delete Recipe
Route::delete('/recipe-single/{recipe}', [RecipeController::class, 'destroy']);

//Show Register Form
Route::get('/register', [UserController::class, 'create']);

//Create New User
Route::post('/users', [UserController::class, 'store']);