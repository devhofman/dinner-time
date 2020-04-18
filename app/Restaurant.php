<?php

namespace App;

use App\Category;
use App\Town;
use App\Comment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';
    protected $fillable = [
        'name',
        'description',
        'longitude', 
        'latitude',
        'zoom',
        'user_id',
        'town_id',
        'category_id',
        'created_at'
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function category() {
        return $this->belongsTo(Category::class, 'id');
    }

    public function towns() {
        return $this->belongsTo(Town::class, 'id');
    }

    public function users() {
        return $this->belongsTo(User::class, 'id');
    }
}
