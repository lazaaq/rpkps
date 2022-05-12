<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::factory()->count(1)->create(['name' => 'Semester 1']);
        Semester::factory()->count(1)->create(['name' => 'Semester 2']);
        Semester::factory()->count(1)->create(['name' => 'Semester 3']);
        Semester::factory()->count(1)->create(['name' => 'Semester 4']);
        Semester::factory()->count(1)->create(['name' => 'Semester 5']);
        Semester::factory()->count(1)->create(['name' => 'Semester 6']);
        Semester::factory()->count(1)->create(['name' => 'Semester 7']);
        Semester::factory()->count(1)->create(['name' => 'Semester 8']);
    }
}
