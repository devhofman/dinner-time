<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Recipe;
use App\Restaurant;

class CategoryController extends Controller
{

    public function __construct() 
    {
        $this->middleware(['auth:api']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::with(['recipes', 'restaurants'])->get();

        return response($category, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $category = new Category;
        $category->name = $request->name;

        $category->save();
        return response($category, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
         $category->delete();

         return response('Category item has been deleted', 200);
    }
}
