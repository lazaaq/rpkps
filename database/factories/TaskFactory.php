<?php

namespace Database\Factories;

use App\Models\CpmkCplCourse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cpmkCplCourse = CpmkCplCourse::all()->count();
        return [
            'cpmk_cpl_course_id' => $this->faker->numberBetween(1, $cpmkCplCourse),
            'name' => $this->faker->word(),
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }
}
