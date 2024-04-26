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
        $module = Module::find($id);

        return view('modules.show')->with('module', $module);
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
