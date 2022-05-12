<?php

namespace Database\Seeders;

use App\Models\LearningGoalCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningGoalCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LearningGoalCourse::factory()->count(10)->create();
    }
}
