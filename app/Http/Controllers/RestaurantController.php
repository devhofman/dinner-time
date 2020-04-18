<?php

namespace App\Http\Controllers;

use App\Town;
use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::with([
            'towns', 'category', 'comments', 'users'
        ])->get();

        return response($restaurants, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Town $town, Category $category)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'longitude' => 'required',
            'latitude' => 'required',
            'zoom' => 'required',
        ]);

        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->user_id = auth()->user()->id;
        $restaurant->description = $request->description;    
        $restaurant->latitude = $request->latitude;
        $restaurant->longitude = $request->longitude;
        $restaurant->zoom = $request->zoom;
        $restaurant->town_id = $town->id;
        $restaurant->category = $category->id;
        $restaurant->save();

        return response($restaurant, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
