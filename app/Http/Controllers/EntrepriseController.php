<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the submitted data
        $validatedData = $request->validate([
            'nom_entreprise' => 'required|string',
            'num_action' => 'required|string',
            'theme_formation' => 'required|string',
            'mode_formation' => 'required|string',
            // Validate other fields...
        ]);
    
        // Process the submitted data, such as saving to the database
        // ...
    
        // Redirect to a different route after successful form submission
        return redirect()->route('admin.dashboard')->with('success', 'Formulaire soumis avec succès!');
    }
    
}
