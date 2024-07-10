<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::factory(5)->create()->each(function ($guru) {
            // Additional logic if needed
        });
    }
}
