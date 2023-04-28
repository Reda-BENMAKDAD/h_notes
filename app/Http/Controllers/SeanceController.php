<?php

namespace App\Http\Controllers;

use App\Models\Groupes;
use App\Models\Module;
use App\Models\Prof;
use Illuminate\Support\Facades\Validator;

use App\Models\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seances = Seance::all();
        return view('seance.index', compact('seances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules = Module::all();
        $profs = Prof::all();
        $groupes = Groupes::all();
        return view('seance.create', compact('modules', 'profs', 'groupes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Seance::create($request->all());
        return redirect()->route('seance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seance = Seance::findOrFail($id);
        return view('seance.show', compact('seance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $seance = Seance::findOrFail($id);
        $modules = Module::all();
        $profs = Prof::all();
        $groupes = Groupes::all();
        return view('seance.edit', compact('seance', 'modules', 'profs', 'groupes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Seance::findOrFail($id)->update($request->all());
        return redirect()->route('seance.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Seance::findOrFail($id)->delete();
        return redirect()->route('seance.index');
    }
}
