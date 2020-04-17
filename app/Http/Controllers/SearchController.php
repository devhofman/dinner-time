<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request) 
    {
    	$data = $request->validate([
            'title' => 'string|required'
        ]);

    	$recipe = Recipe::where('title', $request->title)
    					->orWhere('title', 'like', '%' . $request->title . '%')->get();
    					

    	return response($recipe, 200);
    }
}
