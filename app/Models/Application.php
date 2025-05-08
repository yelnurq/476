<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'birth_date',
        'grade',
        'parent_name',
        'phone',
        'message',
    ];
}
