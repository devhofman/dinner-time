<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Recipe;
use App\Restaurant;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comment::with('recipes', 'user')->get();

        return response($comment, 200);
    }


    public function store(Request $request, Recipe $recipe)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $comment = new Comment();
        $comment->title = $request->title;
        $comment->content = $request->content;
        $comment->user_id = auth()->user()->id;
        $comment->recipe_id = $recipe->id;
        $comment->save();


        return response($comment, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return response('Comment has been deleted', 200);
    }
}
