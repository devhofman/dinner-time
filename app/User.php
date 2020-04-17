<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Recipe;
use App\Comment;
use App\Restaurant;

class User extends Authenticatable implements JWTSubject, MustVerifyEmail
{
    use Notifiable;
    use HasRoles;

    protected $guard_name = 'api';

    protected $with = ['roles', 'permissions'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier() {

        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }

    public function recipes() {
        return $this->hasMany('App\Recipe');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function restaurants() {
        return $this->hasMany('App\Restaurant');
    }
    
}
