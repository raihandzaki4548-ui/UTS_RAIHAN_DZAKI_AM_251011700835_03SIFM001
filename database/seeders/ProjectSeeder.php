<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            [
                'brand' => 'Lamborghini',
                'model' => 'Huracan EVO',
                'year' => 2024,
                'rent_price' => 15000000,
                'image' => 'lamborghini.jpg',
                'transmission' => 'Automatic',
                'description' => 'Supercar mewah dengan desain agresif dan performa tinggi.',
            ],
            [
                'brand' => 'Ferrari',
                'model' => 'F8 Tributo',
                'year' => 2023,
                'rent_price' => 18000000,
                'image' => 'ferrari.jpg',
                'transmission' => 'Automatic',
                'description' => 'Supercar Italia dengan desain elegan dan performa luar biasa.',
            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'S-Class',
                'year' => 2024,
                'rent_price' => 8000000,
                'image' => 'mercedes.jpg',
                'transmission' => 'Automatic',
                'description' => 'Sedan premium dengan kenyamanan dan kemewahan kelas atas.',
            ],
            [
                'brand' => 'BMW',
                'model' => 'M4 Competition',
                'year' => 2024,
                'rent_price' => 7000000,
                'image' => 'bmw.jpg',
                'transmission' => 'Automatic',
                'description' => 'Mobil sport premium dengan tampilan sporty dan performa dinamis.',
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
