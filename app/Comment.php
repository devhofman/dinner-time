<?php

namespace App;

use App\Recipe;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title', 'author', 'content', 'created_at'
    ];

    public function recipe()
  {
    return $this->belongsTo(Recipe::class);
  }
}
