<?php

namespace Database\Factories;

use App\Models\Rpkps;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rpkpm>
 */
class RpkpmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $rpkps = Rpkps::all()->count();
        return [
            'rpkps_id' => $this->faker->numberBetween(1, $rpkps),
            'scales' => $this->faker->randomFloat(2, 0, 1),
            'method_offline' => $this->faker->word(),
            'method_online' => $this->faker->word(),
            'time_offline' => $this->faker->word(),
            'time_online' => $this->faker->word(),
            'experience_offline' => $this->faker->word(),
            'experience_online' => $this->faker->word(),
        ];
    }
}
