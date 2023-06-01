<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Piecejointe;

class PieceJointeSeeder extends Seeder
{
    public function run()
    {
        Piecejointe::factory()->count(10)->create();
    }
}
