<?php

namespace App;

use App\Recipe;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	protected $table = 'photos';
	
    public function recipes() {
        return $this->belongsTo(Recipe::class);
    } 
}
