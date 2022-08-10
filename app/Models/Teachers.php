<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Teachers extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable=[
        "name",
        "designation",
        "dob",
        "gender",
        "religion",
        "email",
        "phone",
        "address",
        "joining_date",
        "photo",
        "user_name",
        "password",
    ];

    public function classes(){
        return $this->hasMany(Classes::class);
    }
}
