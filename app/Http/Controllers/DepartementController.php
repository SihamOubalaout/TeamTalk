<?php

namespace App\Http\Controllers;
use App\Models\Departement;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {
        // Logique pour récupérer tous les départements depuis la base de données
        $departements = Departement::all();

        // Retourner les départements à la vue
        return view('departements.index', compact('departements'));
    }
    public function showDepartments()
{
    $departements = Departement::all();

    return view('departements.show', compact('departements'));
}


}
