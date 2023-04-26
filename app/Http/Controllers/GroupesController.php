<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupes;
use App\Models\Filiere;

class GroupesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $groupes = Groupes::all();
        return view('groupes.index', compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $filiere = Filiere::all();
        return view('groupes.create' , ['filiere'=>$filiere]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'libelle' => 'required',
            'idFiliere' => 'required|exists:filiere,id'
        ]);

        Groupes::create($validatedData);

        return redirect()->route('groupes.index')->with('success', 'Groupe created successfully!');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $groupes= Groupes::findOrFail($id);
        return view('groupes.edit' , ['groupes'=>$groupes]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $groupes= Groupes::findOrFail($id);
        return view('groupes.edit' , ['groupes'=>$groupes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $groupes= Groupes::findOrFail($id);
        $validatedData = $request->validate([
            'libelle' => 'required',
            'idFiliere' => 'required|exists:filiere,id'
        ]);

        $groupes->update($validatedData);

        return redirect()->route('groupes.index')->with('success', 'Groupe updated successfully!');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $groupes= Groupes::findOrFail($id);
        $groupes->delete();

        return redirect()->route('groupes.index')->with('success', 'Groupe deleted successfully!');
 
    }
}
