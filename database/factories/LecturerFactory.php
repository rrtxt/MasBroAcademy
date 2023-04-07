<?php

namespace Database\Factories;

use Database\Seeders\LecturerSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class LecturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'lecturer_name' => $this->faker->name(),
            'lecturer_email' => $this->faker->email(),
            'lecturer_password' => Hash::make($this->faker->password()), 
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ];
    }
}
