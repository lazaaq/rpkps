<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentClassroom>
 */
class StudentClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $student = Student::all()->count();
        $classroom = Classroom::all()->count();
        return [
            'student_id' => $this->faker->numberBetween(1, $student),
            'classroom_id' => $this->faker->numberBetween(1, $classroom)
        ];
    }
}
