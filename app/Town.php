<?php

namespace App;

use App\Restaurant;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $table = 'towns';
    protected $fillable = [
        'name',
        'description',
        'longitude', 
        'latitude',
        'zoom',
        'created_at'
    ];

    public function restaurants() {
        return $this->hasMany(Restaurant::class);
    }
}
