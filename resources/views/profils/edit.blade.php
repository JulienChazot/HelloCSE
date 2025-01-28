@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier le Profil</h1>

    <form action="{{ route('profils.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Prénom -->
        <div class="form-group">
            <label for="first_name">Prénom</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $profile->first_name }}" required>
        </div>

        <!-- Nom -->
        <div class="form-group">
            <label for="last_name">Nom</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $profile->last_name }}" required>
        </div>

        <!-- Image -->
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($profile->image)
            <img src="{{ asset('storage/' . $profile->image) }}" alt="Image de {{ $profile->first_name }}" class="rounded-circle me-3" width="50" height="50">
            @endif
        </div>

        <!-- Statut -->
        <div class="form-group">
            <label for="status">Statut</label>
            <select class="form-control" id="status" name="status" required>
                <option value="active" {{ $profile->status == 'active' ? 'selected' : '' }}>Actif</option>
                <option value="pending" {{ $profile->status == 'pending' ? 'selected' : '' }}>En attente</option>
                <option value="inactive" {{ $profile->status == 'inactive' ? 'selected' : '' }}>Inactif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection