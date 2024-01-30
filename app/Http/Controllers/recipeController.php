<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Recipe;

class recipeController extends Controller
{
    public function index(){

        $recipes = DB::select('SELECT * FROM recipes');

        return view("recipe.index",["recipes"=>$recipes]);
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);

        $newRecipe = new Recipe();
        $newRecipe->name = $data['name'];
        $newRecipe->content = $data['content'];
        $newRecipe->save();
        return redirect(route('recipe.index'));
    }
    public function edit(Recipe $recipe){
        return view('recipe.edit',['recipe'=> $recipe]);
    }
    public function update(Recipe $recipe, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);
        $recipe->update($data);
        return redirect(route('recipe.index'))->with('success','Recipe updated successfully');
    }
}
