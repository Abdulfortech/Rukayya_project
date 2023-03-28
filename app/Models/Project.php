<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'lecturer_id',
        'student_id',
        'title',
        'code',
        'faculty',
        'department',
        'session',
        'status',
    ];
}
