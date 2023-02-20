<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PipelineController;
use App\Http\Controllers\UtilisateurController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::controller(UtilisateurController::class)->group(function () {

    // Fetcing users globally and filtred
    Route::get('/app/v1/data/utilisateurs' ,'index')->name('utilisateurs.liste');
    Route::get('/app/v1/data/utilisateur/{id}' ,'show')->name('utilisateur.show');

    // Creating  new user
    Route::get('/app/v1/data/utilisateur/creer' ,'create')->name('utilisateur.create');
    Route::post('/app/v1/data/utilisateur/sauvgarder' ,'create')->name('utilisateur.store');

    // Updating user details
    Route::get('/app/v1/data/{id}/utilisateur' ,'edit')->name('utilisateur.edit');
    Route::put('/app/v1/data/{id}/utilisateur' ,'update')->name('utilisateur.update');

    Route::get('/app/v1/data/{id}/utilisateurs' ,'destroy')->name('utilisateur.delete');

});

// Routes de pipeline

Route::controller(PipelineController::class)->group(function () {

    Route::get('/app/v1/simulateur/etap/eligibilites', 'eligibilites');
    Route::get('/app/v1/simulateur/etap/contrat',      'envoieContrat');
    Route::get('/app/v1/simulateur/etap/validation',   'validationeligibilite');
    Route::get('/app/v1/simulateur/etap/confirmation', 'confirmationContrat');
    Route::get('/app/v1/simulateur/etap/statut-dossier',   'DossierIcomplet');
    Route::get('/app/v1/simulateur/etap/montage',   'ConsitutionDossier');
    Route::get('/app/v1/simulateur/etap/bureau-etude',   'TansferDouanes');
    Route::get('/app/v1/simulateur/etap/reception',   'AccuseReception');
    Route::get('/app/v1/simulateur/etap/remboursement',   'Remboursement');
    Route::get('/app/v1/simulateur/etap/facturation',   'facurationPresta');
    Route::get('/app/v1/simulateur/etap/finalisation',   'DemandeFournisseur');

});

// Routes des pages de base

Route::controller(HomeController::class)->group(function () {

    Route::get('/home', 'index')->name('home');


});

 