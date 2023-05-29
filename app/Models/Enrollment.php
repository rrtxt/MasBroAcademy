<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enrollment extends Model
{
    use HasFactory;

    protected $table = 'enrollments';

    protected $fillable = ['enroll_date', 'student_id'];

    public function students(){
        return $this->belongsTo(Student::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class, 'enrollments_courses');
    }
}
