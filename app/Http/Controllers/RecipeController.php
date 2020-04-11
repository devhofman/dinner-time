<?php

namespace App\Http\Controllers;

use App\User;
use App\Recipe;
use App\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() 
    {
        $this->middleware(['auth:api']);
    }

    public function index()
    {
        $recipes = Recipe::with('comments')->get();

        return response()->json($recipes, 200);
    }

    public function getRecipe(Recipe $recipe, $id)
    {
        $recipe = Recipe::find($id)->user()->get();

        return response()->json($recipe, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = $request->validate([
            'title' => 'string|max:30|required',
            'about' => 'string|required',
            'category' => 'string|required',
            'ingredients' => 'string|required',
            'how_prepare' => 'string|required',
            'time_prepare' => 'string|required'
        ]);

        $recipe = new Recipe;
        $recipe->title = $request->title;
        $recipe->user_id = auth()->user()->id;
        $recipe->about = $request->about;
        $recipe->category = $request->category;
        $recipe->ingredients = $request->ingredients;
        $recipe->how_prepare = $request->how_prepare;
        $recipe->time_prepare = $request->time_prepare;
        $recipe->save();

        return response()->json($recipe, 200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return response('Recipe has been deleted', 200);
    }
}
