@extends('layouts.app')

@section('content')
<h1>Modifier le Profil</h1>
</div>
</div>

<div class="darksection">
    <div class="container">
        <form action="{{ route('profils.update', $profile->id) }}" method="POST" enctype="multipart/form-data" class="bg-sky-200 rounded-xl p-4 max-w-4xl mx-auto">
            @csrf
            @method('PUT')

            <!-- Prénom -->
            <div class="form-group mb-4">
                <label for="first_name">Prénom</label>
                <input type="text" class="form-control w-full p-2 border rounded" id="first_name" name="first_name" value="{{ $profile->first_name }}" required>
            </div>

            <!-- Nom -->
            <div class="form-group mb-4">
                <label for="last_name">Nom</label>
                <input type="text" class="form-control w-full p-2 border rounded" id="last_name" name="last_name" value="{{ $profile->last_name }}" required>
            </div>

            <!-- Image -->
            <div class="form-group mb-4">
                <label for="image">Image</label>
                <input type="file" class="form-control w-full p-2 border rounded" id="image" name="image">
                @if($profile->image)
                <img src="{{ asset('storage/' . $profile->image) }}" alt="Image de {{ $profile->first_name }}" class="rounded-full me-3 w-[50px] h-[50px] mt-5">
                @endif
            </div>

            <!-- Statut -->
            <div class="form-group mb-4">
                <label for="status">Statut</label>
                <select class="form-control w-full p-2 border rounded" id="status" name="status" required>
                    <option value="active" {{ $profile->status == 'active' ? 'selected' : '' }}>Actif</option>
                    <option value="pending" {{ $profile->status == 'pending' ? 'selected' : '' }}>En attente</option>
                    <option value="inactive" {{ $profile->status == 'inactive' ? 'selected' : '' }}>Inactif</option>
                </select>
            </div>
            <a href="{{ route('profils.index') }}" class="bg-gray-400 text-white p-2 rounded">Retour</a>
            <button type="submit" class="mt-3 bg-[#b38e4a] text-white p-2 rounded">Mettre à jour</button>
        </form>
    </div>
</div>
@endsection
