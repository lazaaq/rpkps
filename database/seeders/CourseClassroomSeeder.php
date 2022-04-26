<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseClassroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::all()->count();
        for($i=1; $i<=$course; $i++) {
            CourseClassroom::factory()->count(1)->create([
                'course_id' => $i
            ]);
        }
    }
}
