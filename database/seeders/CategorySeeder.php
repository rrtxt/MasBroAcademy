<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Str;
use Illuminate\Support\Facades\Date;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Web Development', 'Mobile Development', 'Data Science', 'Machine Learning', 'System Design']; 

        foreach($categories as $category){
            DB::table('categories')->insert(
                ['name' => $category,
                'img_link' => 'image/masbro-ngoding.jpg',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
                ]);
        }

    }
}
