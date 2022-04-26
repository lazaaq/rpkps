<?php

namespace Database\Seeders;

use App\Models\CplCourse;
use App\Models\Rpkps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RpkpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rpkps::factory()->count(10)->create();

        for($i=1; $i<=10; $i++) {
            CplCourse::factory()->count(1)->create();
        }
    }
}
