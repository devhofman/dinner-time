<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
