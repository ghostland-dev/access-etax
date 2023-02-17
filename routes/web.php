<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\PipelineController;
use App\Http\Controllers\HomeController;

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

Route::get('/app/v1/data/utilisateurs', function () {

    $Utilisateurs =  User::All();
   // dd( $Utilisateurs);

    return view('pages.utilisateurs.liste', compact('Utilisateurs'));
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

 