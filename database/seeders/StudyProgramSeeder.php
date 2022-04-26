<?php

namespace Database\Seeders;

use App\Models\HeadOfStudyProgram;
use App\Models\StudyProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++) {
            StudyProgram::factory()->count(1)->create();
            HeadOfStudyProgram::factory()->count(1)->create([
                'study_program_id' => ($i+1),
            ]);
        }
    }
}
