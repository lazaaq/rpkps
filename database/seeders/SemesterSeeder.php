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
        Semester::factory()->count(1)->create(['name' => 'Semester 1', 'is_genap' => false]);
        Semester::factory()->count(1)->create(['name' => 'Semester 2', 'is_genap' => true]);
        Semester::factory()->count(1)->create(['name' => 'Semester 3', 'is_genap' => false]);
        Semester::factory()->count(1)->create(['name' => 'Semester 4', 'is_genap' => true]);
        Semester::factory()->count(1)->create(['name' => 'Semester 5', 'is_genap' => false]);
        Semester::factory()->count(1)->create(['name' => 'Semester 6', 'is_genap' => true]);
        Semester::factory()->count(1)->create(['name' => 'Semester 7', 'is_genap' => false]);
        Semester::factory()->count(1)->create(['name' => 'Semester 8', 'is_genap' => true]);
    }
}
