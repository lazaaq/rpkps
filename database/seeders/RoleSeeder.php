<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'rolename' => 'kaprodi',
        ]);
        Role::create([
            'rolename' => 'akademik',
        ]);
        Role::create([
            'rolename' => 'dosen',
        ]);
        Role::create([
            'rolename' => 'mahasiswa',
        ]);
    }
}
