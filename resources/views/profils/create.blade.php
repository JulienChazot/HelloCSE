

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Créer le Profil</h1>

    <form action="{{ route('profils.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Prénom -->
        <div class="form-group">
            <label for="first_name">Prénom</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>

        <!-- Nom -->
        <div class="form-group">
            <label for="last_name">Nom</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>

        <!-- Image -->
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>

        <!-- Statut -->
        <div class="form-group">
            <label for="status">Statut</label>
            <select class="form-control" id="status" name="status">
                <option value="inactive">Inactif</option>
                <option value="pending">En attente</option>
                <option value="active">Actif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Créer le profil</button>
    </form>
</div>
@endsection