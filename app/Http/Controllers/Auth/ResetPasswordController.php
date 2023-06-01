<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;


class ResetPasswordController extends Controller
{
    // Afficher le formulaire de changement de mot de passe
    public function showChangePasswordForm(Request $request)
{
    $token = $request->route('token');
    return view('auth.passwords.reset', compact('token'));
}


    // Mettre à jour le mot de passe de l'utilisateur
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Vérifier si le mot de passe actuel est valide
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Le mot de passe actuel est incorrect.']);
        }

        // Mettre à jour le mot de passe
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('home')->with('success', 'Votre mot de passe a été mis à jour avec succès.');
    }
}
