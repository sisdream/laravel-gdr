<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CharacterItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $characters = Character::all();                       // object Post
        $items = Item::all()->pluck('id')->toArray(); // array  [1, 2, ... n]

        foreach ($characters as $character) {
            $character
                ->items()
                ->attach($faker->randomElements($items, random_int(0, 3)));
        }
    }
}
