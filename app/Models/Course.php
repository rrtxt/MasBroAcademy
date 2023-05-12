<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    public $timestamps = true;

    protected $fillable = ['title', 'description', 'lecturer_id', 'image', 'category_id'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the user that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lecturers()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
