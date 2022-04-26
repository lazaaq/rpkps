<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CourseSeeder::class,
            LecturerSeeder::class,
            StudyProgramSeeder::class,
            SemesterSeeder::class,
            GraduateProfileLearningGoalSeeder::class,
            LearningGoalCourseSeeder::class,
            CurriculumSeeder::class,
            LecturerPlottingSeeder::class,
            ClassroomSeeder::class
        ]);
    }
}
