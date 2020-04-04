<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
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

    public function user() {
        return $this->belongsTo(User::class);
    }
}
