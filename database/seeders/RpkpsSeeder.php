<?php

namespace Database\Seeders;

use App\Models\CplCourse;
use App\Models\Cpmk;
use App\Models\CpmkCplCourse;
use App\Models\MaterialReference;
use App\Models\Rpkps;
use App\Models\StudyMaterial;
use App\Models\Task;
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

            $cpmkCplCourse = CpmkCplCourse::factory()->count(1)->create([
                'rpkps_id' => $i,
            ]);
            Task::factory()->count(5)->create([
                'cpmk_cpl_course_id' => $cpmkCplCourse[0]->id,
            ]);
        }

        for($i=1; $i<=$constant; $i++) {
            StudyMaterial::factory()->count(2)->create([
                'rpkps_id' => $i
            ]);
            MaterialReference::factory()->count(2)->create([
                'rpkps_id' => $i
            ]);
        }

    }
}
