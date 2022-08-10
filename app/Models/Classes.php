<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable=[
        "class_name",
        "class_numeric",
        "teacher_id",
        "note",
    ];

    public function teacher(){

        return $this->belongsTo(Teachers::class);
    }
}
