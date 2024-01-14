<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Foodchef;
class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cheaf = [
            [
                'id'=>101,
                'name'=>'Juna Rorimpandey',
                'spesiality'=>'Master Chef',
                'image'=>'cheafjuna.jpg'
            ],
            [
                'id'=>102,
                'name'=>'Gordon Ramsay',
                'spesiality'=>'Cook',
                'image'=>'cheaf1.jpg'
            ],
            [
                'id'=>103,
                'name'=>'Sanji',
                'spesiality'=>'Pâtissier',
                'image'=>'sanji3.jpg'
            ],
        ];
        foreach($cheaf as $cheaf){
            foodchef::create($cheaf);
    }
    }
}
