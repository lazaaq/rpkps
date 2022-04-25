<?php

namespace Database\Seeders;

use App\Models\GraduateProfile;
use App\Models\GraduateProfileLearningGoal;
use App\Models\LearningGoal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GraduateProfileLearningGoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LearningGoal::factory()->count(10)->create();
        GraduateProfile::factory()->count(12)->create();
        GraduateProfileLearningGoal::factory()->count(30)->create();
    }
}
