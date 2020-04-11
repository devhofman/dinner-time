<?php

namespace App;

use App\Category;
use App\Town;
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
        'town_id',
        'category_id',
        'created_at'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function towns() {
        return $this->belongsTo(Town::class);
    }
}
