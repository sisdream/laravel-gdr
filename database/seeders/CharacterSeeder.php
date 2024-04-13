<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = config("characters");
        foreach ($datas['characters'] as $data) {

            $character = new Character;
            $character->fill($data);
            $character->save();
        };
    }
}
