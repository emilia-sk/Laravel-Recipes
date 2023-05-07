<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //Show Index(main) Page
    public function index() {
        return view('index', [
            'recipes' => Recipe::latest()->paginate(6)
        ]);
    }

    public function recipesPage() {
        return view('recipes-page');
    }
}
