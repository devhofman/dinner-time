<?php

namespace App;

use App\User;
use App\Recipe;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
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

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function recipes() {
        return $this->belongsTo(Recipe::class);
    }
}
