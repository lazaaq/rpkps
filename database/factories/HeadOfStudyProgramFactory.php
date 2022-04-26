<?php

namespace Database\Factories;

use App\Models\Lecturer;
use App\Models\StudyProgram;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HeadOfStudyProgram>
 */
class HeadOfStudyProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $lecturer = Lecturer::all()->count();
        $studyProgram = StudyProgram::all()->count();
        return [
            'lecturer_id' => $this->faker->unique()->numberBetween(1, $lecturer),
            'study_program_id' => $this->faker->numberBetween(1, $studyProgram),
            'year' => $this->faker->randomNumber(4, true),
            'status' => 1
        ];
    }
}
