<?php

namespace Database\Seeders;
use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $food =  [
            [
                'title' => 'Kepiting Saus Tiram',
                'price' => 'Rp.25.000',
                'image' => 'kepiting.jpg',
                'description' => 'Kepiting saus tiram adalah sebuah hidangan makanan laut dari Tiongkok yang terdiri dari kepiting yang disajikan dengan siraman saus tiram.',
            ],
            [
                'title' => 'Sate',
                'price' => 'Rp.15.000',
                'image' => 'sate.jpg',
                'description' => 'Sate adalah makanan yang terbuat dari daging yang dipotong kecil-kecil dan ditusuk sedemikian rupa dengan tusukan lidi tulang daun kelapa atau bambu',
            ],
            [
                'title' => 'Nasi Goreng Spesial',
                'price' => 'Rp.20.000',
                'image' => 'nasi.jpeg',
                'description' => 'Nasi goreng adalah makanan berupa nasi yang digoreng dan dicampur dalam minyak goreng, margarin, atau mentega. ',
            ],
            [
                'title' => 'soto',
                'price' => 'Rp.15.000',
                'image' => 'soto.jpg',
                'description' => 'Soto ayam kuning ini rasanya gurih segar. Isian ayam suwir dan sayuran membuat soto ini mengenyangkan dinikmati dengan nasi hangat.',
            ],
        ];
        foreach ($food as $food) {
            Food::create($food);
        }
    }
}
