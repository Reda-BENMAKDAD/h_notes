<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\Prof;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profs = Prof::all();
        return view('prof.index', compact('profs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prof.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Prof::create($request->all());
        return redirect()->route('prof.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prof = Prof::findOrFail($id);
        return view('prof.show', compact('prof'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prof = Prof::findOrFail($id);
        return view('prof.edit', compact('prof'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Prof::findOrFail($id)->update($request->all());
        return redirect()->route('prof.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Prof::findOrFail($id)->delete();
        return redirect()->route('prof.index');
    }
}
