<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function formulaire(){
        return view('add_student');
    }

    public function traitement(){
        request()->validate([
            'lastname' => ['required'],
            'firstname' => ['required'],
            'classe' => ['required'],
            'megnumber'=>['required'],    
        ]);

        $students = Student::create([
            'lastname' => request('lastname'),
            'firstname' => request('firstname'),
            'classe'=> request('classe'),
            'megnumber'=>['required'],    

        ]);
        
        if ($students) {
            return back()->withInput()->withErrors([
                'lastname'=>"Veuillez renseigner le nom de l'élève.",
                'password'=>"Veuillez renseigner le prénom de l'élève",
                'classe'=>"Veuillez renseigner la classe de l'élève",
            ]);
        };

    }

    public function liste(){
        $students= Student::All();
        
        return view('liste', [
            'students' => $students,
        ]);
    }
}

