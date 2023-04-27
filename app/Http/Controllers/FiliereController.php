<?php

namespace App\Http\Controllers;
use App\Models\Filliere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = Filliere::all();
        return view('filieres.index', ['filieres'=>$filieres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filieres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $nom=$request->input('nom');

          $validation=Validator::make($request->all(),
          [
            'nom'=>'required|max:200',
        ],
        [
        'nom.required'=>'Erreur le nom est obligatoires' ,
        'nom.max'=>'Erreur le nom ne doit pas dépassé 200 caractères',
        ]);

        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
           }
           Filliere::create($request->post());

        return redirect()->route('filiers.index')->with('message',"bien ajouté");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $filier=Filliere::findorFail($id);
        return view('filiers.show',['filier'=>$filier]);
    }


    public function edit(string $id)
    {
        $filier=Filliere::findorFail($id);
        return view('filieres.edit',['filier'=>$filier]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validation=Validator::make($request->all(),
        [
            'nom'=>'required|max:25',

        ],
        [
            'nom.required'=>'le nom est obligatoire',
            'nom.max'=>'le nom ne doit pas dépassé 25 caractères',

        ]
        );

        if($validation->fails()){
            return back()->withErrors($validation->errors())->withInput();
           }

           $filier=Filliere::findorFail($id);
           $filier->nom=$request->input('libelle');
           $filier->save();
           return redirect()->route('filiers.index')->with('message','la filiere est bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filier=Filliere::findorFail($id);
        $filier->delete();
        return redirect()->route('filiers.index')->with('message','la filiere a bien été suppprimée');
    }
}
