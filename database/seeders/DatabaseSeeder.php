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
            SemesterSeeder::class,
            LecturerSeeder::class,
            StudyProgramSeeder::class,
            GraduateProfileLearningGoalSeeder::class,
            LearningGoalCourseSeeder::class,
            CurriculumSeeder::class,
            LecturerPlottingSeeder::class,
            ClassroomSeeder::class,
            CourseClassroomSeeder::class,
            StudentSeeder::class,
            StudentClassroomSeeder::class,
            RpkpsSeeder::class,
            RpkpmSeeder::class,
        ]);
    }
}
