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

Route::view('/', 'index');

Route::get('/inscription', [InscriptionController::class, 'formulaire']);
Route::post('/inscription', [InscriptionController::class, 'traitement']);


Route::get('/connexion', [ConnexionController::class,'formulaire']);
Route::post('/connexion', [ConnexionController::class,'traitement']);

Route::get('/admin', [CompteController::class,'ifNotConnected']);
Route::get('/add_student', [CompteController::class, 'ifNotConnected']);
Route::get('/meg_create', [CompteController::class, 'ifNotConnected']);

Route::get('/admin',[StudentController::class,'liste']);
Route::get('/add_student', [StudentController::class, 'formulaire']);
Route::post('/add_student', [StudentController::class, 'traitement']);


Route::get('/meg_create', [MegController::class, 'formulaire']);
Route::post('/meg_create', [MegController::class, 'traitement']);

Route::get('/deconnexion',[CompteController::class, 'deconnexion']);