<?php

namespace Database\Seeders;

use App\Models\WeeklyLecture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeeklyLectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WeeklyLecture::factory()->count(10)->create();
    }
}
