<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;

class UtilisateursController extends Controller{
    public function liste(){
        $utilisateurs = Utilisateurs::All();

        return view('meg', [
            'utilisateurs' => $utilisateurs,
        ]);

    }

/*     public function voir(){
        $email=request('email');

        $utilisateur= Utilisateur::where('email', $email)->first();

        return view('utilisateur', [
            'utilisateur'=>$utilisateur,
        ]);

        return $email;
    } */
}