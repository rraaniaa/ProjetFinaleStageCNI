<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailsettingController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Valider les données soumises
        $validatedData = $request->validate([
            'nom_entreprise' => 'required|string',
            'num_action' => 'required|string',
            'theme_formation' => 'required|string',
            'mode_formation' => 'required|string',
            // Valider d'autres champs...
        ]);

        // Traiter les données soumises, par exemple, les enregistrer dans la base de données
        // ...

        return redirect()->route('entreprise.create')->with('success', 'Formulaire soumis avec succès!');
    }
}
