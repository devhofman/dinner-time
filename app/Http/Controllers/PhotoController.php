<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, Recipe $recipe)
    {
        $data = $request->validate([
            'photo' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('photo')){
            
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            $extension = $request->file('photo')->getClientOriginalExtension();
           
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $photo = new Photo;
        $photo->photo = $fileNameToStore;
        $photo->recipe_id = $recipe->id;
        $photo->save();

        return response($photo, 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();

        return response('Photo has been deleted');
    }
}
