<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecturer>
 */
class LecturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'photo' => 'default.jpg',
            'name' => $this->faker->word(),
            'nip' => $this->faker->numerify('############'),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
