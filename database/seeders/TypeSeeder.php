<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(__DIR__ . "/../csv/types.csv", "r");

        $first_line = true;
        while (!feof($file)) {
            $type_data = fgetcsv($file);
            if (!$first_line) {
                $type = new Type;
                $type->name = $type_data[0];
                $type->image = $type_data[1];
                $type->description = $type_data[2];

                $type->save();
            }

            $first_line = false;
        }
        
    }
}
