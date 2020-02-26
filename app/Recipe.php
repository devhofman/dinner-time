<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'about',
        'category',
        'ingredients',
        'how_prepare',
        'time_prepare'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function users() {
        return $this->belongsTo('App\User', 'recipe_id');
    }
}
