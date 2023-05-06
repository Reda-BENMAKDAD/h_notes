<?php

namespace App\Http\Controllers;
use App\Models\Prof;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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

        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);
        $userData = ['name'=> $validatedData['nom'], 'email'=> $validatedData['email'], 'password' => Hash::make($validatedData['password'])];
        $user = User::create($userData);
        $user->assignRole('prof');
        $profData = ['nom' => $validatedData['nom'], 'prenom' => $validatedData['prenom'], 'user_id' => $user->id];
        Prof::create($profData);
        

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
