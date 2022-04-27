<?php

namespace Database\Seeders;

use App\Models\StudyRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudyRoom::factory()->count(10)->create();
    }
}
