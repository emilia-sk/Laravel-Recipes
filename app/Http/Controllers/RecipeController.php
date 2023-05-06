<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //Show Index(main) Page
    public function index() {
        return view('index');
    }

    public function recipesPage() {
        return view('recipes-page');
    }
}
