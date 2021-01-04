<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;

class UtilisateursController extends Controller{
    public function liste(){
        $utilisateurs = Utilisateurs::All();


        return view('admin', [
            'utilisateurs' => $utilisateurs,
        ]);

    }

}