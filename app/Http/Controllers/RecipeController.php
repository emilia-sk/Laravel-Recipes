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

        if ($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Recipe::create($formFields);

        return redirect('/recipes-all')->with('message', 'Recipe Created Successfully!');
    }

    //Show Edit Form
    public function edit(Recipe $recipe)
    {

        return view('recipes.edit', ['recipe' => $recipe]);
    }

    //Update Recipe Data
    public function update(Request $request, Recipe $recipe)
    {
        //Check if logged user is the owner of the recipe
        if ($recipe->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action!');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'author' => ['required', Rule::unique('recipes', 'author')],
            'time' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'directions' => 'required',
        ]);

        if ($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $recipe->update($formFields);

        return view('recipes.recipe-single', [
            'recipe' => $recipe
        ]);
    }

    //Delete Recipe
    public function destroy(Recipe $recipe)
    {

        //Check if logged user is the owner of the recipe
        if ($recipe->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action!');
        }

        $recipe->delete();

        return redirect('/recipes-all')->with('message', 'Recipe Deleted Successfully!');
    }

    //Manage Recipes
    public function manage()
    {
        return view('recipes.manage', ['recipes' => auth()->user()->recipes()->get()]);
    }

}