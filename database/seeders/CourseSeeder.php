<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //this for one
        // $course = new Course();

        // $course->name = "laravel";
        // $course->description = "Description laravel";
        // $course->category = "web";

        // $course->save();

        //This for severl
        Course::factory(50)->create();
    }
}
