<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    public $timestamps = true;

    protected $fillable = ['title', 'description', 'lecturer_id', 'image'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the user that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(Lecturer::class, 'id', 'lecturer_key');
    }


}
