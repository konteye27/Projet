apres avoir installer laravel breeze comment inserre mon template<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AjouterRoleControler;
use App\Http\Controllers\SalleClasseController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\BlocController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});


//ROUTES AJOUTER

// Routes d'authentification générées par Laravel Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes pour la gestion des utilisateurs
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
});
// Routes d'authentification générées par Laravel Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes pour la gestion des utilisateurs
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

//ajouter role
Route::get('role/ajouter', [])->name('ajouter_role');

//Créer une Route pour Afficher tous les éléments
Route::get('/Salles', 'SalleClasseController@index');
Route::get('/Salles/createSalle', [SalleClasseController::class, 'methodeCreateSalle'])->name('Salles.createSalle');
Route::post('/Salles', [SalleClasseController::class, 'methodeStore'])->name('Salles.store');


//route pour seance
Route::get('/Seance/createSeance', [SeanceController::class, 'methodeCreate'])->name('Seance.createSeance');
Route::post('/Seance', [SeanceController::class, 'methodeStore'])->name('Seance.store');


//route pour bloc
Route::get('/Bloc/createBloc', [BlocController::class, 'methodeCreate'])->name('Bloc.createBloc');
Route::post('/Bloc', [BlocController::class, 'methodeStore'])->name('Bloc.store');
});

require __DIR__.'/auth.php';
