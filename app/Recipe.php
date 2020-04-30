<?php

namespace App;

use App\User;
use App\Category;
use App\Comment;
use App\Photo;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'title',
        'user_id',
        'recipe_id',
        'about',
        'category_id',
        'ingredients',
        'how_prepare',
        'time_prepare'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function users() {
        return $this->belongsTo(User::class , 'id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }
}
