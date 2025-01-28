@extends('layouts.app')
@section('content')
        <h1>
            Liste des profils
        </h1>
</div> 
</div>
<div class="darksection">
    <div class="container">
        <!-- Bouton "Créer un profil" -->
        <a href="{{ route('profils.create') }}" class="btn btn-success mb-3">
            Créer un profil
        </a>

        <div class="list-group">
            @foreach($profiles as $profile)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <!-- Affichage des informations du profil -->
                    <div class="d-flex align-items-center">
                        <!-- Image du profil -->
                        <img src="{{ asset('storage/' . $profile->image) }}" alt="Image de {{ $profile->first_name }}" class="rounded-circle me-3" width="50" height="50">


                        <!-- Nom complet -->
                        <div>
                            <strong>{{ $profile->first_name }} {{ $profile->last_name }}</strong> <!-- Prénom + Nom -->
                            @auth
                                <div>
                                    <small class="text-muted">{{ $profile->status }}</small>
                                </div>
                            @endauth
                        </div>
                    </div>

                    <!-- Bouton "Modifier" -->
                    @auth
                        <a href="{{ route('profils.edit', $profile->id) }}" class="btn btn-primary btn-sm">
                            Modifier
                        </a>
                    
                        <form action="{{ route('profils.destroy', $profile->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce profil ?')">
                                Supprimer
                            </button>
                        </form>
                    @endauth
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection