<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jika ingin generate user dummy pakai factory
        // \App\Models\User::factory(10)->create();

        // Panggil seeder Kelas
        $this->call([
            KelasSeeder::class,
        ]);
    }
}