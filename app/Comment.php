<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'content',
        'created_at'
    ];

    protected $hidden = 'updated_at';
}
