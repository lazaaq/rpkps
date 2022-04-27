<?php

namespace Database\Seeders;

use App\Models\Rkpm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RkpmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rkpm::factory()->count(10)->create();
    }
}
