<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Groupes;
use App\Models\Filliere;
use App\Models\Stagieres;
use App\Models\Module;
use App\Models\Prof;

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
        $filiere = Filliere::all();
        return view('groupes.create' , ['filiere'=>$filiere]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Groupes::create($request->post());

        return redirect()->route('groupes.index')->with('success', 'Groupe created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $profs = Prof::join('modules', 'profs.id', '=', 'modules.idProf')
            ->join('seances', 'modules.id', '=', 'seances.idModule')
            ->where('seances.idGroupe', $id)
            ->select('profs.*')
            ->distinct()
            ->get();
        $modules = Module::join('seances', 'modules.id', '=', 'seances.idModule')
        ->select('modules.*')
        ->where('seances.idGroupe', $id)
        ->distinct()
        ->get();
        $stagieres = Stagieres::where('idgroupe', $id)->get();
        $groupes= Groupes::findOrFail($id);
        return view('groupes.show' , ['groupes'=>$groupes , 'stagiere'=>$stagieres , 'modules'=>$modules , 'profs'=>$profs]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $filieres = Filliere::all();
        $groupes= Groupes::findOrFail($id);
        return view('groupes.edit' , ['groupes'=>$groupes , 'filieres'=>$filieres]);
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
            'idFilliere' => 'required|exists:fillieres,id'
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
