<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable=[

        "section_name",
        "category",
        "capacity",
        "class_id",
        "teacher_id",
        "note",
    ];

    public function class(){
        return $this->belongsTo(Classes::class);
    }

    public function teacher(){
        return $this->belongsTo(Teachers::class);
    }
}
