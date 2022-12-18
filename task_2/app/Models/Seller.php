<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'password',
        'created_at',
        'updated_at',
        'status'

    ];


    protected $hidden = [
        'password',


    ];

    public function product(){
        return $this->hasMany(Product::class,'seller_id','id');
    }

}
