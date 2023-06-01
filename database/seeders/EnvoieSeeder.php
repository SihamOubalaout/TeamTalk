<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Envoie;

class EnvoieSeeder extends Seeder
{
    public function run()
    {
        Envoie::factory()->count(10)->create();
    }
}
