<?php

namespace App;

use App\Recipe;
use App\Restaurant;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function recipes() {
        return $this->hasMany('App\Recipe', 'category_id');
    }

    public function restaurants() {
        return $this->hasMany('App\Restaurant');
    }
}
