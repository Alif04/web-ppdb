<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'name',
        'student_id',
        'jk',
        'noHp',
        'nisn',
        'noAyah',
        'noIbu',
        'asalSekolah',
        'email',
    ];
    use HasFactory;

}
