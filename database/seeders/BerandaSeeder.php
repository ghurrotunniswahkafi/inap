<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BerandaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('beranda')->insert([
            'instagram'      => 'https://instagram.com/your_ig',
            'email'          => 'youremail@example.com',
            'whatsapp'       => '081234567890',
            'location'       => 'Alamat lengkap di sini',
            'maps_link'      => 'https://goo.gl/maps/link',

            'slider1_image'  => 'slider1.jpg',
            'slider1_text'   => 'Teks slider 1',

            'slider2_image'  => 'slider2.jpg',
            'slider2_text'   => 'Teks slider 2',

            'created_at'     => now(),
            'updated_at'     => now(),
        ]);
    }
}
