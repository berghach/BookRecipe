<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recipeController extends Controller
{
    public function index(){
        return view("recipe.index");
    }
}
