<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVerify extends Model
{
    use HasFactory;
    protected $table = 'UserVerify';
    protected $fillable = [
        'user_id',
        'token',
        'created_at',
        'updated_at'
    ];

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
