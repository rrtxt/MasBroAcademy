<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['lecturer_name', 'lecturer_email', 'lecturer_password'];
}
