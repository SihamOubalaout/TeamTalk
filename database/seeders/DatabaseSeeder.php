<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
         \App\Models\Departement::factory(10)->create();
         \App\Models\User::factory(10)->create();

        
             // Créer un utilisateur pour tester l'authentification
             
    }
    
}



