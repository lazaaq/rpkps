<?php

namespace Database\Factories;

use App\Models\Rpkps;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaterialReference>
 */
class MaterialReferenceFactory extends Factory
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
            'name' => $this->faker->word()
        ];
    }
}
