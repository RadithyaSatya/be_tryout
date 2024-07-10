<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $photo = 'Photo'.$this->faker->numberBetween(1,9).'.jpg';
        return [
            'id_guru' => $this->faker->userName,
            'nama' => $this->faker->name,
            'tgl_lahir' => $this->faker->date($format='Y-m-d', $max='now'),
            'jk' => $this->faker->randomElement(['L','P']),
            'alamat' => $this->faker->address,
            'no_telp' => $this->faker->phoneNumber,
            'foto' => $photo,
            'matpel' => $this->faker->randomElement(['MTK','PKN','Bahasa Indonesia','IPA'])
        ];
    }
}
