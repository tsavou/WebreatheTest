<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Affiche la liste des modules
     */
    public function index()
    {
        $modules= Module::all();

        return view('modules.index')->with('modules', $modules);

    }

    /**
     * affiche le formulaire d'ajout d'un module
     */
    public function create()
    {
        return view('modules.create');
    }

    /**
     * Enregistre le module dans la base de données
     */
    public function store(Request $request)
    {
        $module = new Module();
        $module->name = $request->name;
        $module->details = $request->details;
        $module->installation_date = $request->installation_date;
        $module->save();

        return redirect()->route('modules.index')->with('success', 'Module ajouté avec succès');
    }

    /**
     * Affiche le détail d'un module
     */
    public function show(string $id)
    {
        // Récupère le module
        $module = Module::findOrFail($id);

        // Récupere les mesures du module triées par date
        $mesures = $module->mesures()->orderBy('date_mesure')->get();

        // calcul du nb de données envoyées
        $nbMesures = $mesures->count();


        return view('modules.show', compact('module', 'mesures', 'nbMesures'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
