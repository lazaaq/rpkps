<?php

namespace Database\Seeders;

use App\Models\CplCourse;
use App\Models\Cpmk;
use App\Models\CpmkCplCourse;
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
        $constant = 10;

        Rpkps::factory()->count($constant)->create();

        for($i=1; $i<=$constant; $i++) {
            CplCourse::factory()->count(1)->create();

            Cpmk::factory()->count(1)->create();

            CpmkCplCourse::factory()->count(1)->create([
                'rpkps_id' => $i,
            ]);
        }
    }
}
