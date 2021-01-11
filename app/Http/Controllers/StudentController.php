<?php

namespace App\Http\Controllers;

use App\Models\Meg;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
            'megnumber'=>request('megnumber'),    

        ]);
        
        if ($students) {
            return redirect('admin');
        }; 

        return back()->withInput()->withErrors([
            'lastname'=>"Veuillez renseigner le nom de l'élève.",
            'firstname'=>"Veuillez renseigner le prénom de l'élève",
            'classe'=>"Veuillez renseigner la classe de l'élève",
        ]);

    }

    public function liste(){

        
        return view('admin', []);
    }

    public function dataListe(){

        $students= Student::All();

        
        return view('student', [
            'students' => $students,
        ]);
    }
    
    public function meg(){
        $students->meg;

        return view('admin',[
            'meg'=> $meg,
        ]);
    }

    public function deleteStudent($id){
        
        Meg::where('student',$id)->delete();
        $deleteStudent=Student::where('id',$id)->delete();

        return back()->with('success','Elève supprimé !');

    }
}

