<?php

namespace Database\Factories;

use App\Models\Rpkpm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LearningMedia>
 */
class LearningMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $rpkpm = Rpkpm::all()->count();
        return [
            'rpkpm_id' => $this->faker->numberBetween(1, $rpkpm),
            'name' => $this->faker->word(),
        ];
    }
}
