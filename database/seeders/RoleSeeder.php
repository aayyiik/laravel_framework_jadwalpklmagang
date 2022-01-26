<?php

namespace Database\Seeders;

use App\Models\Role;
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
        Role::create(['jenis_role' => 'Mahasiswa']);
        Role::create(['jenis_role' => 'Dosen']);
        Role::create(['jenis_role' => 'PAA']);

    }
}
