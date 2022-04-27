<?php

namespace Database\Factories;

use App\Models\LecturerPlotting;
use App\Models\StudyRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WeeklyLecture>
 */
class WeeklyLectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $lecturerPlotting = LecturerPlotting::all()->count();
        $studyRoom = StudyRoom::all()->count();
        return [
            'lecturer_plotting_id' => $this->faker->numberBetween(1, $lecturerPlotting),
            'study_room_id' => $this->faker->numberBetween(1, $studyRoom),
            'meeting' => $this->faker->numberBetween(1, 10),
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'study_material' => $this->faker->sentence()
        ];
    }
}
