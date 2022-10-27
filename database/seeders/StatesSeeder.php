<?php

namespace Database\Seeders;

use App\Models\States;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        States::create([
            "name" => "São Paulo",
            "initials" => "SP",
        ]);

        States::create([
            "name" => "Rio de Janeiro",
            "initials" => "RJ",
        ]);
    }
}
