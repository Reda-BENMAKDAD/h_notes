<?php

namespace App\Http\Controllers;

use App\Models\Module;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $module = Module::all();
        return view('blades.module.index', ['modules'=>$module]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $nom=$request->input('nom');
        $masseHoraire=$request->input('masseHoraire');
    
          $validation=Validator::make($request->all(),
          [
            'nom'=>'required|max:200',
            'masseHoraire'=>'required'
          ],
          [
           'nom.required'=>'Erreur le libelle est obligatoires' ,
           'nom.max'=>'Erreur le libelle ne doit pas dépassé 200 caractères',
           'masseHoraire.required'=>'les infos est obligatoires'
          ]);

          if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
           }
           Module::create($request->post());

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
        return view('module.edit',['modules'=>$module]);
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
