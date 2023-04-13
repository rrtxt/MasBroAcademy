<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lecturer extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'email', 'password'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    /**
     * Get all of the comments for the Lecturer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
