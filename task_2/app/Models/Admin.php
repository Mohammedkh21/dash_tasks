<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Admin extends Authenticatable
{
    use HasFactory;
    //public $timestamps = false;
    protected $table = 'admins';
    protected $guard = 'admin';
    protected $fillable = [
        'name',
        'email',
        'permissions',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
