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
            'incident'=>['required'],
            'student'=>['required'],
            ]);
            
        $resultat = Meg::create([
            'incident'=> request('incident'),
            'student'=>request('student'),
        ]);

        $student = Student::find(request('student'));

        $student->megnumber=$student->megnumber+1;
        $student->save();
        
        if ($resultat) {
            return redirect('/admin');
        };

        return back()->withInput()->withErrors([
            'email'=>'Vos identifiants sont incorrect.',
        ]);
    }

}
