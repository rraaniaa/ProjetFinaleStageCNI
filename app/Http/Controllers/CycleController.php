<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cycle; // Don't forget to import your Cycle model

class CycleController extends Controller
{




    
    public function edit($id)
    {
        $cycle = Cycle::findOrFail($id);
        return view('cycles.edit', compact('cycle'));
    }


    public function destroy($id)
    {
        $cycle = Cycle::findOrFail($id);
        $cycle->delete();
    
        return redirect()->back()->with('success', 'Cycle deleted successfully');
    }
    
    public function new()
    {
        return view('cycles.new');
        return view('cycles.create');
        
    }


    public function index()
{
    $cycles = Cycle::all(); // Fetch all cycles from the database

    return view('cycles.index', compact('cycles'));
}
    public function create()
    {

       
        
            $cycles = Cycle::all(); // Fetch all cycles
            return view('cycles.create', compact('cycles')); // Pass cycles to the view
        

        return view('cycles.create'); // Assuming you have a view named 'cycles.create'
    }




    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nom_entreprise' => 'required|string',
            'num_action' => 'required|string',
            'theme_formation' => 'required|string',
            'mode_formation' => 'required|string',
            'lieu_formation' => 'required|string',
            'gouvernorat' => 'required|string',
            'periode' => 'required|date',
            // Add validation rules for other form fields
        ]);
    
        // Find the cycle by ID
        $cycle = Cycle::findOrFail($id);
    
        // Update cycle data
        $cycle->update($validatedData);
    
        return redirect()->back()->with('success', 'Cycle updated successfully!');
    }




    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nom_entreprise' => 'required|string',
            'num_action' => 'required|string',
            'theme_formation' => 'required|string',
            'droit_tirage_indiv' => 'nullable|boolean',
            'droit_tirage_collec' => 'nullable|boolean',
            'mode_formation' => 'required|string',
            'lieu_formation' => 'required|string',
            'gouvernorat' => 'required|string',
            'periode' => 'required|date',
            // Add validation rules for other form fields
        ]);

        // Create a new Cycle instance and save the data
        $cycle = new Cycle();
        $cycle->nom_entreprise = $validatedData['nom_entreprise'];
        $cycle->num_action = $validatedData['num_action'];
        $cycle->theme_formation = $validatedData['theme_formation'];
        $cycle->gouvernorat = $validatedData['gouvernorat'];
        $cycle->lieu_formation = $validatedData['lieu_formation'];
        $cycle->droit_tirage_indiv = $request->has('droit_tirage_indiv');
        $cycle->droit_tirage_collec = $request->has('droit_tirage_collec');
        // Set other properties of the Cycle model

        $cycle->save();

        return redirect()->back()->with('success', 'Cycle created successfully!');
    }

    // Other methods if needed
}
