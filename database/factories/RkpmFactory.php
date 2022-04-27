<?php

namespace Database\Factories;

use App\Models\Rpkpm;
use App\Models\WeeklyLecture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rkpm>
 */
class RkpmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $weeklyLecture = WeeklyLecture::all()->count();
        $rpkpm = Rpkpm::all()->count();
        return [
            'weekly_lecture_id' => $this->faker->numberBetween(1, $weeklyLecture),
            'rpkpm_id' => $this->faker->numberBetween(1, $rpkpm),
            'appropriate' => $this->faker->boolean(),
            'well_used' => $this->faker->randomElement(['Kurang', 'Cukup', 'Baik', 'Sangat Baik']),
            'method' => $this->faker->boolean(),
            'experience' => $this->faker->boolean(),
            'media' => $this->faker->boolean(),
            'critics' => $this->faker->paragraph(),
        ];
    }
}
