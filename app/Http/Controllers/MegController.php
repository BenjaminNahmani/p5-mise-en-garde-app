<?php

namespace App\Http\Controllers;

use App\Models\Meg;
use App\Models\Student;
use Illuminate\Http\Request;


class MegController extends Controller
{
    public function formulaire(){
        return view('meg_create');
    }

    public function traitement(){
        request()->validate([
            'incident'=>['required','min:25'],
            'student'=>['required'],
            ],[
                'incident.min' => 'Vous devez saisir au moins 25 caractères.',
            ]);
            
        $resultat = Meg::create([
            'incident'=> request('incident'),
            'student'=>request('student'),
        ]);

        

        $student = Student::find(request('student'));

        $student->megnumber=$student->megnumber+1;
        $student->save();
        
        if ($resultat) {
            return response()->json('Mise en garde ajoutée avec succès !');
            return redirect('/admin');
        };

        return back()->withInput()->withErrors([
            'incident'=>'Vous devez saisir au moins 25 caractères.',
        ]);
    }

}
