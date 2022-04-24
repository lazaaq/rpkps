<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudyProgram>
 */
class StudyProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        $name = ucwords($name);
        $abbr = '';
        $words = preg_split("/(\s|\-|\.)/", $name);
        foreach($words as $word) {
            $abbr .= substr($word,0,1);
        }
        $abbr ;
        return [
            'name' => $name,
            'abbreviation' => $abbr,
        ];
    }
}
