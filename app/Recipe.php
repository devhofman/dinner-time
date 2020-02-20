<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function user()
    {
        $posts = User::findOrFail($userId)->posts;
        return $posts;
    }
}
