<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function traitement(){
        request()->validate([
            'lastname' => ['required', 'email'],
            'firstname' => ['required', 'confirmed', 'min:8'],
            'classe' => ['required'],    
        ]);

        $students = Student::create([
            'lastname' => request('lastname'),
            'firstname' => request('firstname'),
            'classe'=> request('classe'),
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

        dd($students);
        
        return view('liste', [
            'students' => $students,
        ]);
    }
}

