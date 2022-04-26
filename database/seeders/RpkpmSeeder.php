<?php

namespace Database\Seeders;

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
        Rpkpm::factory()->count(10)->create();
    }
}
