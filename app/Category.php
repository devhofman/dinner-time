<?php

namespace App;

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
        return $this->hasMany('App\Recipe', 'category', 'id');
    }

    public function restaurants() {
        return $this->hasMany('App\Resturant', 'category', 'id');
    }
}
