<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\UtilisateursController;
use App\Http\Controllers\StudentController;


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


Route::view('/', 'index');

Route::get('/inscription', [InscriptionController::class, 'formulaire']);
Route::post('/inscription', [InscriptionController::class, 'traitement']);

Route::post('/connexion', [ConnexionController::class,'traitement']);

Route::get('/add_student', [StudentController::class, 'formulaire']);
Route::post('/add_student', [StudentController::class, 'traitement']);
Route::get('/admin',[StudentController::class,'liste']);