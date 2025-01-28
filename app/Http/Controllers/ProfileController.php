<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();

        return view('profils.index', compact('profiles'));
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);

        return view('profils.edit', compact('profile'));
    }

    public function update(ProfileRequest $request, $id)
{
    $validated = $request->validated();

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

        if ($profile->image && file_exists(storage_path('app/public/' . $profile->image))) {
            unlink(storage_path('app/public/' . $profile->image));
        }

        $profile->delete();

        return redirect()->route('profils.index')->with('success', 'Profil supprimé avec succès.');
    }
}
