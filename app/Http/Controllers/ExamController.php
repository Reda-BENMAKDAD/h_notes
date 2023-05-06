<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\Exam;
use App\Models\Module;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(session()->has('useraccount')){
            $exams = Exam::where('profId',session()->get('useraccount') )->get();
            $modules = Module::all();
            $role = 'prof';
        }else{
            $exams = Exam::all();
            $modules = Module::all();
            $role = 'admin';
        }

        return view('exam.index', compact('exams', 'modules', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules = Module::all();
        return view('exam.create', compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Exam::create($request->all());
        return redirect()->route('exam.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $exam = Exam::findOrFail($id);
        return view('exam.show', compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exam = Exam::findOrFail($id);
        $modules = Module::all();
        return view('exam.edit', compact('exam', 'modules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Exam::findOrFail($id)->update($request->all());
        return redirect()->route('exam.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Exam::destroy($id);
        return redirect()->route('exam.index');
    }
}
