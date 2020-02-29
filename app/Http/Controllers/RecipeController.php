<?php

namespace App\Http\Controllers;

use App\User;
use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Recipe::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'user_id' => 'required',
            'about' => 'string|required',
            'category' => 'string|required',
            'ingredients' => 'string|required',
            'how_prepare' => 'string|required',
            'time_prepare' => 'string|required'
        ]);

        $recipe = new Recipe;
        $recipe->title = $request->title;
        $recipe->user_id = $request->user_id;
        $recipe->about = $request->about;
        $recipe->category = $request->category;
        $recipe->ingredients = $request->ingredients;
        $recipe->how_prepare = $request->how_prepare;
        $recipe->time_prepare = $request->time_prepare;
        $recipe->save();

        return response()->json([
            'status' => 'Recipe added!'
        ], 200);
    }

    public function showRecipeOf() {

        $recipeOf = User::find(auth()->user()->id)->recipes()->get();

        return response()->json([
            'status' => 'Recipes of user',
            'Recipes' => $recipeOf->toArray()
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
