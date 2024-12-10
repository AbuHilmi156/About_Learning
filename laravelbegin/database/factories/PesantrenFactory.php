<?php

namespace Database\Factories;

use App\Models\Kota;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Palsu;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pesantren>
 */
class PesantrenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Palsu::create('id_ID');
        $nama = $faker->name;
        // Hapus spasi dari nama sebelum digunakan dalam email
        $nama_email = str_replace('     ', '', $nama);
        return [
            'nama' => $nama,
            'id_kota' => Kota::all()->random()->id,
            'email' => strtolower($nama_email) . '@gmail.com', // Pastikan juga email dalam huruf kecil
            'alamat' => $faker->address(),
            'jumlah_santri' => $faker->numberBetween(0, 100),
            'no_rek' => $faker->bankAccountNumber(),
        ];
    }
}
