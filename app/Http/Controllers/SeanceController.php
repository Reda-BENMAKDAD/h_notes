<?php

namespace App\Http\Controllers;

use App\Models\Groupes;
use App\Models\Module;
use App\Models\GroupeProf;
use App\Models\Prof_modules;

use App\Models\Prof;
use Illuminate\Support\Facades\Validator;

use App\Models\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    public function GetprofModules($id)
    {
        $modules = Module::all();
        $prof_modules = Prof_modules::all();
        $profModules = [];

        foreach($prof_modules as $prfMdl) {
            foreach($modules as $module) {
                if($prfMdl->idProf == $id && $module->id == $prfMdl->idModule) {
                    $profModules[] = $module;
                }
            }
        }
        return $profModules;
    }


    public function getGroupeProf ($id){
        $addedGroups = [];
        $groupe_Prof = GroupeProf::all();
        $groupes = Groupes::all();
        $profGroupes = [];
        foreach($groupe_Prof as $grbprof) {
            foreach($groupes as $groupe) {
                if($grbprof->idProf == $id && $groupe->id == $grbprof->idGroupe) {
                   $profGroupes[] = $groupe;
                }
            }
        }
        return $profGroupes;
    }


    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        if(session()->has('useraccount')){
            $seances = Seance::where('idProf',session()->get('useraccount') )->get();

            $role = 'prof';
        }else{
            $seances = Seance::all();
            $role = 'admin';
        }

        return view('seance.index', compact('seances' , 'role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(session()->has('useraccount')){
            $profs = Prof::where('id' ,'=', session()->get('useraccount'))->get();
            $modules = $this->GetprofModules(session()->get('useraccount'));
            $groupes = Groupes::all();
            $role = 'prof';
        }else{
            $modules = Module::all();
            $profs = Prof::all();
            $groupes = Groupes::all();
            $role = "admin";
        }



        return view('seance.create', compact('modules', 'profs', 'groupes', 'role'));
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
        if(session()->has('useraccount')){
            $seance = Seance::where('idProf',session()->get('useraccount') )
            ->where('id' , $id)
            ->firstOrFail();
            $role = 'prof';
            $profs = Prof::all();
            $groupes = $this->getGroupeProf(session()->get('useraccount'));
            $modules = $this->GetprofModules(session()->get('useraccount'));

        }else{
            $exam = Exam::firstOrFail('id', $id);
            $role = 'admin';
            $modules = Module::all();

        }



        return view('seance.edit', compact('seance', 'modules', 'profs', 'groupes' , 'role'));
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
