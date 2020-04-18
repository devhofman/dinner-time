<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentRest extends Model
{
	protected $table = 'comment_rests';
    protected $fillable = [
        'title',
        'content',
        'user_id', 
        'recipe_id',
        'created_at',
    ];

    protected $hidden = [   
        'updated_at'
    ];

    public function restaurants() {
        return $this->belongsTo(Restaurant::class, 'id');
    }

     public function user() {
        return $this->belongsTo(User::class, 'id');
    }
}
