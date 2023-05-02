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
        $stagiaires = Stagieres::all();
        return view('notes.create' , compact("stagiaires","exams"));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate([
            'valeur' => 'required|regex:/^\d*(\.\d{2})?$/',
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
        $exams = Exam::all();
        $stagieres = Stagieres::all();
        $note = Notes::find($id);
        $exams = Exam::all();
        return view('notes.edit', ['note'=>$note, 'stagieres'=>$stagieres, 'exams'=>$exams]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $note = Notes::find($id);

        $validatedData = $request->validate([
            // this regex is to validate the float number with 2 decimal places
            'valeur' => 'required|regex:/^\d*(\.\d{2})?$/',
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
