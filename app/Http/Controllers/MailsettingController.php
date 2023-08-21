<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailsettingController extends Controller
{
    public function create()
    {
        return view('create');
        return view('cycles.create');
    }

    public function store(Request $request)
    
    {
        // Validation logic for cycle form fields
        $validatedData = $request->validate([
            'nom_entreprise' => 'required|string',
            'num_action' => 'required|string',
            'theme_formation' => 'required|string',
            'mode_formation' => 'required|string',
            // Add validation rules for other fields
        ]);

        // Processing logic for cycle data, e.g., storing in the database
        // Replace this with your actual database insertion code
        // You can access validated data using $validatedData array
        // Example:
        // Cycle::create($validatedData);

        return redirect()->route('cycle.create')->with('success', 'Cycle created successfully!');
    }
}
