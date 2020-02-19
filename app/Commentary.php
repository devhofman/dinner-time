<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    protected $fillable = [
        'title', 'author', 'content', 'created_at'
    ];
}
