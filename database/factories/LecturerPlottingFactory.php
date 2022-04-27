<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LecturerPlotting>
 */
class LecturerPlottingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $course = Course::all()->count();
        $lecturer = Lecturer::all()->count();
        return [
            'course_id' => $this->faker->numberBetween(1, $course),
            'lecturer_id' => $this->faker->numberBetween(1, $lecturer)
        ];
    }
}
