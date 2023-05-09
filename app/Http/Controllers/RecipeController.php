<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //Show Index(main) Page
    public function index() {
        return view('index');
    }

    public function recipesPage() {
        return view('recipes-all', [
            'recipes' => Recipe::latest()->paginate(6)
        ]);
    }
}
