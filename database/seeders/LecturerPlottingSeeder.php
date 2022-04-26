<?php

namespace Database\Seeders;

use App\Models\LecturerPlotting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerPlottingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LecturerPlotting::factory()->count(30)->create();
    }
}
