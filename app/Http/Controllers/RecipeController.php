<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //Show Index(main) Page
    public function index()
    {
        return view('index');
    }

    //Show All Recipes
    public function recipesPage()
    {
        return view('/recipes/recipes-all', [
            'recipes' => Recipe::latest()->filter(request(['search']))->paginate(6)
        ]);
    }

    //Show a Single Recipe
    public function show(Recipe $recipe)
    {
        return view('recipes.recipe-single', [
            'recipe' => $recipe
        ]);
    }

    //Show Create Form
    public function create() {
        return view('recipes.create');
    }

}