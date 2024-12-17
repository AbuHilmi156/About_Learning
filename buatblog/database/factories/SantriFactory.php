<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Santri>
 */
class SantriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [

            'nama' => $faker->name('male'),
            'kelas' =>rand(7, 12),
            'tanggal_lahir' => $faker->date('Y-m-d'),
            'alamat' => $faker->address,
        ];
    }
}
