<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('lecturers')->insert([
        //     'lecturer_name' => Str::random(10),
        //     'lecturer_email' => Str::random(20).'@gmail.com',
        //     'lecturer_password' => Hash::make('lecturer_password'),
        //     'created_at' => Date::now(),
        //     'updated_at' => Date::now(),
        // ]);
        Lecturer::factory()->create();
    }
}
