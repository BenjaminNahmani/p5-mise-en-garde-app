<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;

class InscriptionController extends Controller
{
    public function formulaire(){
        return view('inscription');
    }

    public function traitement(){
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
    
        ], [
            'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit contenir :min caractères.'
        ]);

        $utilisateur = Utilisateurs::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);

        $resultat = auth()->attempt([
            'email'=> request('email'),
            'password'=> request('password'),
            'password_confirmation'=>request('password_confirmation')
        ]);
        
        if ($resultat) {
            return redirect('/');
        };
        return back()->withInput()->withErrors([
            'email'=>'Vos identifiants sont incorrect.',
            'password'=>'Votre mot de passe n\'est pas accépté.',
            'password_confirmation'=>'Vos mot de passe doivent être identique.',
        ]);

    }
}