<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departement;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       departement::create(
            [
                'designation' => 'Ressources Humaines',
                'description' => 'Gère les aspects liés aux ressources humaines de l entreprise.',
            ]);
            departement::create(
            [
                'designation' => 'Finances',
                'description' => 'Responsable de la gestion financière de l entreprise.',
            ]);
            departement::create(
            [
                'designation' => 'Ventes',
                'description' => 'Responsable de la vente des produits ou services de l entreprise.',
            ]);
            departement::create(
            [
                'designation' => 'Marketing',
                'description' => 'Responsable des stratégies marketing et de la promotion des produits ou services.',
            ]);
            departement::create(
            [
                'designation' => 'Production',
                'description' => 'Gère la fabrication ou la production des produits de l entreprise.',
            ]);
            departement::create(
            [
                'designation' => 'Recherche et Développement',
                'description' => 'Responsable de l innovation et de la recherche de nouvelles technologies.',
            ]);
            departement::create(
            [
                'designation' => 'Logistique',
                'description' => 'Responsable de la gestion de la chaîne d approvisionnement et de la logistique.',
            ]);
            departement::create(
            
            [
                'designation' => 'Juridique',
                'description' => 'Responsable des affaires juridiques de l entreprise.',
            ]);
        

        
    }
}
