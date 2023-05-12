<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RecipeController extends Controller
{
    //Show Index(main) Page
    public function index()
    {
        return view('index');
    }

    //Show Create Form
    public function create()
    {
        return view('recipes.create');
    }

    //Show All Recipes
    public function recipesPage()
    {
        return view('recipes.recipes-all', [
            'recipes' => Recipe::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    //Show a Single Recipe
    public function show(Recipe $recipe)
    {
        return view('recipes.recipe-single', [
            'recipe' => $recipe
        ]);
    }

    //Store Recipe Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'author' => ['required', Rule::unique('recipes', 'author')],
            'time' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'directions' => 'required',
        ]);

        Recipe::create($formFields);

        return redirect('/recipes-all')->with('message', 'Recipe created successfully!');
    }

}