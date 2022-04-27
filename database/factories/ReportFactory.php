<?php

namespace Database\Factories;

use App\Models\WeeklyLecture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $weeklyLecture = WeeklyLecture::all()->count();
        return [
            'weekly_lecture_id' => $this->faker->numberBetween(1, $weeklyLecture),
            'week' => $this->faker->randomNumber(1, 10),
            'implementation' => $this->faker->text(),
            'obstacle' => $this->faker->text(),
            'control' => $this->faker->text(),
            'adjustment' => $this->faker->text(),
        ];
    }
}
