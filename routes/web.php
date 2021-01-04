<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MegController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UtilisateursController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index')->name('login');

Route::get('/inscription', [InscriptionController::class, 'formulaire']);
Route::post('/inscription', [InscriptionController::class, 'traitement']);


Route::get('/connexion', [ConnexionController::class,'formulaire']);
Route::post('/connexion', [ConnexionController::class,'traitement']);

Route::get('/admin',[StudentController::class,'liste'])->middleware('auth')->name("pannel");
Route::get('/admin/data',[StudentController::class,'dataListe'])->middleware('auth');

Route::get('/add_student', [StudentController::class, 'formulaire'])->middleware('auth')->name('student');
Route::post('/add_student', [StudentController::class, 'traitement'])->middleware('auth');

Route::get('/meg_create', [MegController::class, 'formulaire'])->middleware('auth')->name('meg_create');
Route::post('/meg_create', [MegController::class, 'traitement'])->middleware('auth');

Route::get('/delete_student/{id}', [StudentController::class,'deleteStudent'])->middleware('auth')->name('student_delete');

Route::get('/deconnexion',[ConnexionController::class, 'deconnexion'])->middleware('auth');

