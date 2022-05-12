<?php

namespace Database\Seeders;

use App\Models\LearningMedia;
use App\Models\Rpkpm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RpkpmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $constant = 10;
        Rpkpm::factory()->count($constant)->create();

        for($i=1; $i<=$constant; $i++) {
            LearningMedia::factory()->count(2)->create([
                'rpkpm_id' => $i,
            ]);
        }
    }
}
