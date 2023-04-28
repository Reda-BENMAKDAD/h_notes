<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Stagieres;
use App\Models\Notes;


class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $notes = Notes::all();
        return view('notes.index' , ['notes'=>$notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $exams = Exam::all();
        $stagieres = Stagieres::all();
        return view('notes.create' , ['stagieres'=>$stagieres , 'exams'=>$exams]);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate([
            'valeur' => 'required|numeric',
            'idstagiere' => 'required|exists:stagieres,id',
            'idexam' => 'required|exists:exams,id'
        ]);

        Notes::create($validatedData);

        return redirect()->route('notes.index')->with('success', 'Note created successfully!');
   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $notes= Notes::findOrFail($id);
        return view('notes.show' , ['notes'=>$notes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $notes = Notes::find($id);
        $exams = Exam::all();
        $stagieres = Stagieres::all();
        return view('notes.edit', ['notes'=>$notes, 'stagieres'=>$stagieres, 'exams'=>$exams]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $note = Notes::find($id);

        $validatedData = $request->validate([
            'valeur' => 'required|numeric',
            'idstagiere' => 'required',
            'idexam' => 'required'
        ]);

        $note->update($validatedData);

        return redirect()->route('notes.index')->with('success', 'Note updated successfully!');
  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $notes = Notes::find($id);

        $notes->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted successfully!');
    
    }
}
