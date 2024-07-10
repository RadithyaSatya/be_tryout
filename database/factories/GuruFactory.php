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
    protected static $counter = 1;
    public function definition(): array
    {
        $sequence = self::$counter++; 
        $photo = 'Photo'.$this->faker->numberBetween(1,9).'.jpg';
        return [
            'id_guru' => 'guru_'. str_pad($sequence, 3, '0',STR_PAD_LEFT),
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
