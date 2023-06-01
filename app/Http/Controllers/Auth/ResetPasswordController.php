<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\User;
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
    // Validate form

    // Check if user is authenticated
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    // Retrieve the authenticated user
    $user = Auth::user();

    // Update the password
    $user->update(['password' => Hash::make($request->newpassword)]);

    return redirect()->route('messages')->with('success', 'Votre mot de passe a été mis à jour avec succès.');
}

}
