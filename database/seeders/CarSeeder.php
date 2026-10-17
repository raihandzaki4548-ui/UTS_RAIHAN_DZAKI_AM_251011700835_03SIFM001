<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'brand' => 'Lamborghini',
                'model' => 'Revuelto',
                'year' => 2025,
                'rent_price' => 35000000,
                'image' => 'lamborghini-revuelto.jpg',
                'transmission' => 'Automatic',
                'description' => 'Lamborghini Revuelto menghadirkan mesin V12 hybrid dengan desain futuristik dan performa luar biasa untuk pengalaman berkendara yang eksklusif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Ferrari',
                'model' => 'SF90 XX Stradale',
                'year' => 2024,
                'rent_price' => 40000000,
                'image' => 'ferrari-sf90-xx.jpg',
                'transmission' => 'Automatic',
                'description' => 'Supercar hybrid berperforma tinggi dengan desain aerodinamis ekstrem dan karakter sporty yang eksklusif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'S-Class',
                'year' => 2025,
                'rent_price' => 12000000,
                'image' => 'mercedes-s-class.jpg',
                'transmission' => 'Automatic',
                'description' => 'Sedan premium dengan interior mewah, teknologi modern, dan kenyamanan untuk perjalanan kelas atas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'BMW',
                'model' => 'M4 Competition',
                'year' => 2025,
                'rent_price' => 15000000,
                'image' => 'bmw-m4.jpg',
                'transmission' => 'Automatic',
                'description' => 'Sport coupe premium dengan desain tegas, performa responsif, dan karakter berkendara yang dinamis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Porsche',
                'model' => '911 GT3 RS',
                'year' => 2024,
                'rent_price' => 45000000,
                'image' => 'porsche-911-gt3-rs.jpg',
                'transmission' => 'Automatic',
                'description' => 'Porsche 911 GT3 RS dirancang dengan fokus pada performa lintasan, aerodinamika agresif, dan pengalaman berkendara yang presisi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Rolls-Royce',
                'model' => 'Ghost',
                'year' => 2025,
                'rent_price' => 30000000,
                'image' => 'rolls-royce-ghost.jpg',
                'transmission' => 'Automatic',
                'description' => 'Sedan ultra-mewah dengan desain elegan, kabin eksklusif, dan kenyamanan berkendara yang istimewa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Range Rover',
                'model' => 'Autobiography',
                'year' => 2025,
                'rent_price' => 18000000,
                'image' => 'range-rover-autobiography.jpg',
                'transmission' => 'Automatic',
                'description' => 'SUV mewah yang memadukan kenyamanan premium, tampilan berkelas, dan kemampuan untuk berbagai kondisi perjalanan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'McLaren',
                'model' => '720S',
                'year' => 2023,
                'rent_price' => 35000000,
                'image' => 'mclaren-720s.jpg',
                'transmission' => 'Automatic',
                'description' => 'Supercar ringan dengan desain futuristik, karakter aerodinamis, dan performa yang mengutamakan kecepatan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
