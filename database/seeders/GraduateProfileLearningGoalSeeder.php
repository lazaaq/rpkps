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
        // Learning Goal Seeder
        for($i = 0; $i < 10; $i++ ) {
            LearningGoal::factory()->count(1)->create([
                'code' => 'S' . ($i + 1),
                'component' => 'sikap'
            ]);
        }
        for($i = 0; $i < 3; $i++ ) {
            LearningGoal::factory()->count(1)->create([
                'code' => 'PP' . ($i + 1),
                'component' => 'pp'
            ]);
        }
        for($i = 0; $i < 3; $i++ ) {
            LearningGoal::factory()->count(1)->create([
                'code' => 'KK' . ($i + 1),
                'component' => 'kk'
            ]);
        }
        for($i = 0; $i < 3; $i++ ) {
            LearningGoal::factory()->count(1)->create([
                'code' => 'KU' . ($i + 1),
                'component' => 'keterampilan'
            ]);
        }

        // Graduate Profile Seeder
        GraduateProfile::factory()->count(12)->create();

        // Graduate Profile Learning Goal Seeder
        GraduateProfileLearningGoal::factory()->count(30)->create();
    }
}
