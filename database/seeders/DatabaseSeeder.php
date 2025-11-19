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
        // Panggil seeder admin yang sudah kamu buat
        $this->call([
            AdminSeeder::class,
            KamarSeeder::class,
            PengunjungSeeder::class,
            MenuPesmaBogaSeeder::class,
            BerandaSeeder::class,
        ]);
    }
}
