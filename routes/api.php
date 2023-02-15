<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/v1/api-auth', function(Request $request){
    if (  !Auth::attempt([ 'email' => $request->email, 'password' => $request->password ]) ) {
            return response()->json([
                                        "Information" => "Pour utiliser E-tax API , Il faudra générer un jeton personnel d'accès.",
                                        "Erreur"      => "les données sont incorrectes",
                                        "requete"     => 200,
                                        "message"     => "les données que vous avez rensigné ne correspondent pas à aucune de nos resultats."
                                    ]);
        } else {
            $user = Auth()->user();
            $token = $user->createToken('token');
            return response()->json([ "access_token" => $token->plainTextToken ]);
        }
});
