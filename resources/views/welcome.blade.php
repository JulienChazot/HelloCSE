@extends('layouts.app')
@section('content')
        <h1>
            Accueil
        </h1>
</div> 
</div>
<div class="darksection">
    <div class="container md:flex items-center justify-between" style="min-height: calc(100vh - 287px);">
        <div class="md:w-1/2 text-left p-12">
            <h2 class="text-2xl font-semibold text-white underline">Bienvenue sur le gestionnaire de profils</h2>
            <p class="text-lg mt-4 text-white">Les utilisateurs peuvent voir la liste de tous les profils actifs. <br> Les administrateurs peuvent modifier et supprimer des profils. De plus, ils voient l'intégralité des profils créés, peu importe leur statut (En attente, Actif ou Inactif). </p>
        </div>

        <div class="md:w-1/2 flex justify-center">
            <!-- Je fais une route simple vers la page de profils -->
            <a href="{{ route('profils.index') }}" class="w-48 h-48 underline bg-sky-200 rounded-lg flex items-center justify-center text-black font-bold">
                Les profils
            </a>
        </div>
    </div>
</div>
@endsection