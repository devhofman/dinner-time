<?php

namespace App\Http\Controllers;

use App\Town;
use Illuminate\Http\Request;

class TownController extends Controller
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
        $towns = Town::with('restaurants')->get();

        return response($towns, 200);
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
            'name' => 'string|required',
            'description' => 'string|required',
            'longitude' => 'required',
            'latitude' => 'required',
            'zoom' => 'required',
        ]);

        $town = new Town();
        $town->name = $request->name;
        $town->description = $request->description;
        $town->longitude = $request->longitude;
        $town->latitude = $request->latitude;
        $town->zoom = $request->zoom;
        $town->save();

        return response($town, 200);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Town $town)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function destroy(Town $town)
    {
        $town->delete();

        return response('Town has been deleted', 200);
    }
}
