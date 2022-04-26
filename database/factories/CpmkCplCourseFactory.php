<?php

namespace Database\Factories;

use App\Models\CplCourse;
use App\Models\Cpmk;
use App\Models\Rpkps;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CpmkCplCourse>
 */
class CpmkCplCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $rpkps = Rpkps::all()->count();
        $cplCourse = CplCourse::all()->count();
        $cpmk = Cpmk::all()->count();

        return [
            'rpkps_id' => $this->faker->numberBetween(1, $rpkps),
            'cpl_course_id' => $this->faker->numberBetween(1, $cplCourse),
            'cpmk_id' => $this->faker->numberBetween(1, $cpmk),
        ];
    }
}
