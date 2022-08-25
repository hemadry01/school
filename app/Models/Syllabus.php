<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    use HasFactory;

    protected $fillable=[
        "title",
        "desciription",
        "user_id",
        "class_id",
        "file",
    ];

    public function class(){
        return $this->belongsTo(Classes::class);
    }
}
