<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Utilisateurs =  User::All();

        return view('pages.utilisateurs.liste', compact('Utilisateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.utilisateurs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);

    // Create the user
    
    $utilisateur = User::create($request->all());

    // Redirect to the user's profile page
    return redirect()->route('utilisateur.show', ['id' => $utilisateur->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Utilisateur =  User::find($id);

        return view('pages.utilisateurs.show',compact('Utilisateur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Utilisateur =  User::find($id);

        return view('pages.utilisateurs.edit',compact('Utilisateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Find the user to update
    $utilisateur = User::findOrFail($id);

    // Update the user with the request data
    $utilisateur->update($request->all());

    // Redirect to the user's profile page
    return redirect()->route('utilisateur.show', ['id' => $utilisateur->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the user to delete
    $utilisateur = User::findOrFail($id);

    // Delete the user
    $utilisateur->delete();

    // Redirect to the users index page
    return redirect()->route('utilisateurs.liste')->with('message');
    }
}
