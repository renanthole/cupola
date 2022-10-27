<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cities::create([
            "states_id" => 1,
            "name" => "São Paulo"
        ]);

        Cities::create([
            "states_id" => 1,
            "name" => "Votuporanga"
        ]);

        Cities::create([
            "states_id" => 2,
            "name" => "Rio de Janeiro"
        ]);

        Cities::create([
            "states_id" => 2,
            "name" => "Paraty"
        ]);
    }
}
