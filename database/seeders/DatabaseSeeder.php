<?php

namespace Database\Seeders;

use App\Models\Guru;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Database\Seeders\GuruSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\SiswaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(UserSeeder::class);
        Guru::factory(10)->create();
        Siswa::factory(10)->create();

        Guru::all()->each(function($guru){
            User::factory()->create(['username' => $guru->id_guru, 'level' => 'Guru']);
        });

        Siswa::all()->each(function($siswa){
            User::factory()->create(['username' => $siswa->nis, 'level' => 'Siswa']);
        });
    }
}
