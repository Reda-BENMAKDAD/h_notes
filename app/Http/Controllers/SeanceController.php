<?php

namespace App\Http\Controllers;
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
        return view('seances.index', compact('seances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Seance::create($request->all());
        return redirect()->route('seances.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seance = Seance::findOrFail($id);
        return view('seances.show', compact('seance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('seances.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Seance::findOrFail($id)->update($request->all());
        return redirect()->route('seances.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Seance::findOrFail($id)->delete();
        return redirect()->route('seances.index');
    }
}
