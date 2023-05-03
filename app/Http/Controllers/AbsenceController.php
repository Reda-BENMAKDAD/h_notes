<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;
use App\Models\Seance;
use App\Models\Stagieres;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absences = Absence::all();
        return view('absence.index', compact('absences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $seances = Seance::all();
        $stagiaires = Stagieres::all();
        return view('absence.create', compact('seances', 'stagiaires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Absence::create($request->all());
        return redirect()->route('absence.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $absence = Absence::findOrFail($id);
        return view('absence.show', compact('absence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $absence = Absence::findOrFail($id);
        $seances = Seance::all();
        $stagiaires = Stagieres::all();
        return view('absence.edit', compact('absence', 'seances', 'stagiaires'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $absence = Absence::find($id);
        $absence->update($request->all());
        return redirect()->route('absence.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $absence = Absence::findOrFail($id);
        $absence->delete();
        return redirect()->route('absence.index');
    }
}
