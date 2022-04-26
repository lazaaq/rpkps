<?php

namespace Database\Seeders;

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
    }
}
