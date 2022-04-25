<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\LearningGoal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LearningGoalCourse>
 */
class LearningGoalCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $course = Course::all()->count();
        $learningGoal = LearningGoal::all()->count();
        return [
            'course_id' => $this->faker->numberBetween(1, $course),
            'learning_goal_id' => $this->faker->numberBetween(1, $learningGoal),
            'percentage' => $this->faker->randomFloat(2, 0, 1)
        ];
    }
}
