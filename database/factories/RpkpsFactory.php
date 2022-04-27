<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Lecturer;
use App\Models\Semester;
use App\Models\StudyProgram;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rpkps>
 */
class RpkpsFactory extends Factory
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
        $studyProgram = StudyProgram::all()->count();
        $semester = Semester::all()->count();
        return [
            'course_id' => $this->faker->numberBetween(1, $course),
            'coordinator' => $this->faker->numberBetween(1, $lecturer),
            'expertise_coordinator' => $this->faker->numberBetween(1, $lecturer),
            'study_program_id' => $this->faker->numberBetween(1, $studyProgram),
            'semester_id' => $this->faker->numberBetween(1, $semester),
        ];
    }
}
