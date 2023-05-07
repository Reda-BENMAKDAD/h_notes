<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\Exam;
use App\Models\Module;
use App\Models\Prof_modules;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // this function to get the modules assigned to prof
    public function GetprofModules($id){
        $modules = Module::all();
        $prof_modules = Prof_modules::all();
        $profModules = [];
        foreach($prof_modules as $prfMdl ){
            foreach($modules as $module){
                if($prfMdl->idProf == $id && $module->id == $prfMdl->idModule){
                    $profModules[]= $module;
                }
            }
        }
        return $profModules;
    }

    public function index()
    {
        if(session()->has('useraccount')){
            $exams = Exam::where('profId',session()->get('useraccount') )->get();
            $modules = $this->GetprofModules(session()->get('useraccount'));
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
        if(session()->has('useraccount')){
            $modules = $this->GetprofModules(session()->get('useraccount'));
            $role = "prof";

        }else{
            $modules = Module::all();
            $role = "admin";
        }
        return view('exam.create', compact('modules', 'role'));
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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(session()->has('useraccount')){
            $exam = Exam::where('profId',session()->get('useraccount') )
            ->where('id' , $id)
            ->firstOrFail();
            $role = 'prof';
            $modules = $this->GetprofModules(session()->get('useraccount'));
        }else{
            $exam = Exam::firstOrFail('id', $id);
            $role = 'admin';
            $modules = Module::all();

        }
        return view('exam.edit', compact('exam', 'modules', 'role'));
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
