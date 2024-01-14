<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $catagories = [
            [
                'id'=>1001,
                'name'=>'Birthday Parties',
                'description'=>'Jika kamu menunjukkan KTP-mu dan telah terdaftar sebagai member di Restoran ini di hari ulang tahunmu, Restoran ini bakal memberikan kue gratis buat kamu'
            ],
            [
                'id'=>1002,
                'name'=>'Private Parties',
                'description'=>'Jika kamu menunjukkan KTP-mu dan telah terdaftar sebagai member di Restoran ini Saat membawa lebih dari 5 orang, Restoran ini bakal memberikan minuman gratis buat kamu'
            ],
            [
                'id'=>1003,
                'name'=>'Custom Parties',
                'description'=>'Jika kamu menunjukkan KTP-mu dan telah terdaftar sebagai member di Restoran ini akan membuat suasana romantis untuk kalian berdua'
            ],
        ];
        foreach($catagories as $category){
            Category::create($category);
    }
    }
}
