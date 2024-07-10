<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition()
    {
        $jurusan = $this->faker->randomElement(['RPL', 'TBS', 'UPW']);
        $kelas = $this->faker->numberBetween(10, 12);
        $photo = 'photo' . $this->faker->numberBetween(1, 9) . '.jpg';
        
        return [
            'nis' => $this->faker->numberBetween(100000, 999999),
            'name' => $this->faker->name,
            'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'jk' => $this->faker->randomElement(['L', 'P']),
            'alamat' => $this->faker->address,
            'jurusan' => $jurusan,
            'kelas' => $kelas . ' ' . $jurusan,
            'ws1' => $this->faker->name,
            'tws1' => $this->faker->phoneNumber,
            'ts' => $this->faker->phoneNumber,
            'foto' => $photo,
            'username' => $this->faker->userName,
        ];
    }
}
