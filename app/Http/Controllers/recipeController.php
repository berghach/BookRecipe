<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\Recipe;

class recipeController extends Controller
{
    public function index(){

        $recipes = Recipe::all();

        return view("index",compact('recipes'));
    }
    public function showRecipe(Recipe $recipe){
        return view("recipe.show",compact('recipe'));
    }
    public function add(){
        $categories = ['breakfast','lunch','dinner'];
        return view("recipe.add",compact("categories"));
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'content' => 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif',
            'category'=>'required'
        ]);
        if($request->hasFile('image')){
            $uploadedImage = $request->file('image');
            
            // Generate a unique filename for the image
            $imageName = time() . '_' . $uploadedImage->getClientOriginalName();
        
            // Store the image in the storage directory
            $imagePath = $uploadedImage->storeAs('public/images', $imageName);
        
            // Move the image from storage to public/images
            File::move(storage_path('app/' . $imagePath), public_path('images/' . $imageName));
        
            // Update the image path to store the correct URL in the database
            $data['image'] = 'images/' . $imageName;
        }
        Recipe::create($data);

        return redirect()->route('recipe.index')->with('success','Recipe added successfully');
    }
    public function edit(Recipe $recipe){
        $categories = ['breakfast','lunch','dinner'];
        return view('recipe.edit',compact('categories','recipe'));
    }
    public function update(Recipe $recipe, Request $request){
        $data = $request->validate([
            'name' => 'nullable',
            'content' => 'nullable',
            'image'=> 'nullable|image|mimes:jpeg,png,jpg,gif'
        ]);
        if($request->hasFile('image')){
            $uploadedImage = $request->file('image');
            
            // Generate a unique filename for the image
            $imageName = time() . '_' . $uploadedImage->getClientOriginalName();
        
            // Store the image in the storage directory
            $imagePath = $uploadedImage->storeAs('public/images', $imageName);
        
            // Move the image from storage to public/images
            File::move(storage_path('app/' . $imagePath), public_path('images/' . $imageName));
        
            // Update the image path to store the correct URL in the database
            $data['image'] = 'images/' . $imageName;
        }
        $recipe->update($data);
        return redirect()->route('recipe.index')->with('success','Recipe updated successfully');
    }
    public function delete(Recipe $recipe){
        $recipe->delete();
        return redirect()->route('recipe.index')->with('success','Recipe deleted successfully');
    }
    public function search(){
        $query = request('search');
        $recipes = Recipe::where('name', 'like', "%$query%")
                       ->orWhere('content', 'like', "%$query%")
                       ->get();
        // dd($recipes);

        return view("index",compact('recipes'));
    }
}
