<?php

namespace Database\Factories;

use App\Models\Semester;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $semester = Semester::all()->count();
        return [
            'semester_id' => $this->faker->numberBetween(1, $semester),
            'name' => $this->faker->word(),
            'active' => $this->faker->boolean(),
        ];
    }
}
