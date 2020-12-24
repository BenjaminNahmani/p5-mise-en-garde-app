<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MegController extends Controller
{
    public function formulaire(){
        return view('meg_create');
    }

    public function traitement(){
        request()->validate([
            'lastname' => ['required'],
            'firstname' => ['required'],
            'classe' => ['required'],
            'teacher' => ['required'],
            'incident'=>['required'],
            ]);
            
        $resultat = auth()->attempt([
            'lastname'=> request('lastname'),
            'firstname'=> request('firstname'),
            'classe'=> request('classe'),
            'teacher'=> request('teacher'),
            'incident'=> request('incident'),
        ]);
        
        
        if ($resultat) {
            return redirect('/admin');
        };

        return back()->withInput()->withErrors([
            'email'=>'Vos identifiants sont incorrect.',
        ]);
    }

}
