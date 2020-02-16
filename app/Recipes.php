<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $fillable = [
        'title', 'description', 'ingredients', 'prepare', 'time', 'category', 'comments'
    ];
}
