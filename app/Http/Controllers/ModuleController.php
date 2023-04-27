<?php

namespace App\Http\Controllers;

use App\Models\Module;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Filliere;
use App\Models\Prof;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $module = Module::all();
        return view('module.index', ['modules'=>$module]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filiere = Filliere::all();
        $prof = Prof::all();

        return view('module.create', ['filiere'=>$filiere , 'prof'=>$prof]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $validation=Validator::make($request->all(),
            [
                'nom'=>'required|max:200',
                'masseHorraire'=>'required',
                'idFilliere' => 'required',
                'idProf' => 'required'
            ]
        );


        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
        }

        Module::create($request->all());

        return redirect()->route('module.index')->with('message',"bien ajouté");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $module=Module::findorFail($id);
        return view('module.show',['modules'=>$module]);
    }


    public function edit(string $id)
    {
        $module=Module::findorFail($id);
        $filiere = Filliere::all();
        $profs = Prof::all();
        return view('module.edit',['module'=>$module,  'filiere'=>$filiere,  'prof'=>$profs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $validation=Validator::make($request->all(),
        // [
        //     'libelle'=>'required|max:25',
        //     'infos'=>'required'

        // ],
        // [
        //     'libelle.required'=>'le libelle est obligatoire',
        //     'libelle.max'=>'le libelle ne doit pas dépassé 25 caractères',
        //     'infos.required'=>'les infos est obligatoire'

        // ]
        // );

        // if($validation->fails()){
        //     return back()->withErrors($validation->errors())->withInput();
        //    }

           $module=Module::findorFail($id);
           $module->nom=$request->input('nom');
           $module->masseHorraire=$request->input('masseHorraire');
           $module->save();
           return redirect()->route('module.index')->with('message','le module est bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $module=Module::findorFail($id);
        $module->delete();
        return redirect()->route('module.index')->with('message','le module a bien été suppprimée');
    }
}
