<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseClassroom>
 */
class CourseClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $classroom = Classroom::all()->count();
        $course = Course::all()->count();
        return [
            'classroom_id' => $this->faker->numberBetween(1, $classroom),
            'course_id' => $this->faker->numberBetween(1, $course),
            'is_active' => $this->faker->boolean()
        ];
    }
}
