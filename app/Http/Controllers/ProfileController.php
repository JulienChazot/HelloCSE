<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Je récupère l'entiereté des profils de ma BDD et je les envoi sur ma vue pour les afficher (la condition de statut se trouve sur la page directement)
        $profiles = Profile::all();

        return view('profils.index', compact('profiles'));
    }

    public function edit($id)
    {
        // Je vais chercher le profil correspondant grâce à son ID et j'affiche ses données sur la page edit
        $profile = Profile::findOrFail($id);

        return view('profils.edit', compact('profile'));
    }

    public function update(ProfileRequest $request, $id)
    {
        $validated = $request->validated();
        // J'écrase les données de ma BDD par les nouvelles entrées sur la page de modification
        $profile = Profile::findOrFail($id);
        $profile->first_name = $validated['first_name'];
        $profile->last_name = $validated['last_name'];
        $profile->status = $validated['status'];

        if ($request->hasFile('image')) {
            if ($profile->image && file_exists(public_path('storage/app/public/' . $profile->image))) {
                unlink(public_path('storage/app/public/' . $profile->image));
            }

            $fileName = strtolower($validated['first_name'] . '_' . $validated['last_name'] . '_profile.' . $request->image->extension());
            $filePath = $request->image->storeAs('images/profils', $fileName, 'public');

            $profile->image = $filePath; 
        }

        $profile->save();

        return redirect()->route('profils.index')->with('success', 'Profil mis à jour avec succès');
    }

    public function create()
    {
        return view('profils.create');
    }

    public function store(ProfileRequest $request)
    {
        $validated = $request->validated();
        // Comme pour les administrateurs, je créé un nouveau profil avec les informations entrées sur la page de création
        $profile = new Profile();
        $profile->first_name = $validated['first_name'];
        $profile->last_name = $validated['last_name'];
        $profile->status = $validated['status'];
        $profile->administrator_id = auth()->id();

        if ($request->hasFile('image')) {
            $fileName = strtolower($validated['first_name'] . '_' . $validated['last_name'] . '_profile.' . $request->image->extension());
            $filePath = $request->image->storeAs('images/profils', $fileName, 'public');

            $profile->image = $filePath; 
        }

        $profile->save();

        return redirect()->route('profils.index')->with('success', 'Profil créé avec succès');
    }

    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        // Je sélectionne le profil choisi et je le supprime
        if ($profile->image && file_exists(storage_path('app/public/' . $profile->image))) {
            unlink(storage_path('app/public/' . $profile->image));
        }

        $profile->delete();

        return redirect()->route('profils.index')->with('success', 'Profil supprimé avec succès.');
    }
}
