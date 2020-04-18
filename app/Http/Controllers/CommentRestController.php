<?php

namespace App\Http\Controllers;

use App\CommentRest;
use Illuminate\Http\Request;

class CommentRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comment::with('restaurants')->get();

        return response($comment, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Restaurant $restaurant)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $comment = new Comment();
        $comment->title = $request->title;
        $comment->content = $request->content;
        $comment->user_id = auth()->user()->id;
        $comment->restaurant_id = $restaurant->id;
        $comment->save();


        return response($comment, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommentRest  $commentRest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentRest $commentRest)
    {
        $commentRest->delete();

        return response('Comment has been deleted', 200);
    }
}
