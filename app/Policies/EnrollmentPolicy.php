<?php

namespace App\Policies;

use App\Models\Enrollment;
use App\Models\Lecturer;
use Illuminate\Auth\Access\HandlesAuthorization;

class EnrollmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Lecturer $lecturer)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Lecturer $lecturer, Enrollment $enrollment)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Lecturer $lecturer)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Lecturer $lecturer, Enrollment $enrollment)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Lecturer $lecturer, Enrollment $enrollment)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Lecturer $lecturer, Enrollment $enrollment)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Lecturer $lecturer, Enrollment $enrollment)
    {
        //
    }
}
