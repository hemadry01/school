<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'guardian_name',
        'father_name',
        'mother_name',
        'father_profession',
        'mother_profession',
        'email',
        'phone',
        'address',
        'image',
        'user_name',
        'password',
    ];

   
}
