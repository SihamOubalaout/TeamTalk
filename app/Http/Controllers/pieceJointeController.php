<?php

namespace App\Http\Controllers;

use App\Models\Piecejointe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


class PiecejointeController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données de la requête
        $request->validate([
            'file' => 'required|file|max:2048', // Taille maximale de fichier de 2 Mo
            'message_id' => 'required|exists:messages,id', // Vérifie que l'ID du message existe dans la table des messages
        ]);

        // Récupération du fichier de la requête
        $file = $request->file('file');

        // Déplacement du fichier vers le stockage approprié
        $filePath = $file->store('public/piecejointes');

        // Création de la pièce jointe dans la base de données
        $piecejointe = Piecejointe::create([
            'url' => Storage::url($filePath),
            'id_message' => $request->input('message_id'),
        ]);

        // Retourner une réponse réussie
        return redirect()->back()->with('success', 'Pièce jointe ajoutée avec succès.');
    }
}
