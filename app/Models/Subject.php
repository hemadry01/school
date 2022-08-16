<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable=[
        "class_id",
        "teacher_id",
        "type",
        "pass_mark",
        "final_mark",
        "subject_name",
        "subject_author",
        "subject_code",
    ];

    public function class(){
        return $this->belongsTo(Classes::class);
    }

    public function teacher(){
        return $this->belongsTo(Teachers::class);
    }
}
