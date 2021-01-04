<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function ifNotConnected(){

/*         dd(auth()); */
        if (!Auth::check()){
            return redirect('/')->withErrors([
                "email" =>'Vous devez être connecté pour avoir accès a cette page.'
            ]);
        }
        
        return redirect('admin');
    }

}
