<?php

namespace Database\Factories;

use App\Models\GraduateProfile;
use App\Models\LearningGoal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GraduateProfileLearningGoal>
 */
class GraduateProfileLearningGoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $learningGoal = LearningGoal::all()->count();
        $graduateProfile = GraduateProfile::all()->count();
        return [
            'learning_goal_id' => $this->faker->numberBetween(1, $learningGoal),
            'graduate_profile_id' => $this->faker->numberBetween(1, $graduateProfile),
        ];
    }
}
