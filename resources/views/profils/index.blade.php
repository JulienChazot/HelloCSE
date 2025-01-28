@extends('layouts.app')
@section('content')
        <h1>
            Liste des profils
        </h1>
</div> 
</div>
<div class="darksection">
    <div class="container" style="min-height: calc(100vh - 287px);">
        @auth
            <a href="{{ route('profils.create') }}" class="bg-sky-200 rounded-lg font-bold p-2.5 mb-3">
                Créer un profil
            </a>
        @endauth
        <div class="list-group mt-10">
            @foreach($profiles as $profile)
            <div class="sm:flex bg-[#e5c78f] rounded-xl p-4 items-center justify-between my-8">
                <div class="flex items-center">
                <img src="{{ $profile->image ? asset('storage/' . $profile->image) : asset('images/profils/profil.png') }}" alt="Image de profil" class="rounded-full me-3 w-[50px] h-[50px]">
                    <div>
                        <strong>{{ $profile->first_name }} {{ $profile->last_name }}</strong>
                        @auth
                            <div>
                                <div class="text-[#168ebd] font-semibold underline">@if ($profile->status == 'active')
                                        Actif
                                    @elseif ($profile->status == 'pending')
                                        En attente
                                    @elseif ($profile->status == 'inactive')
                                        Inactif
                                    @endif
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>

                <div class="flex mt-[12px] sm:mt-0 space-x-2">
                    @auth
                        <a href="{{ route('profils.edit', $profile->id) }}" class="bg-sky-200 rounded-lg font-bold p-1 mr-4">
                            Modifier
                        </a>
                    
                        <form action="{{ route('profils.destroy', $profile->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce profil ?')" class="rounded-lg font-bold p-1 text-white" style="background-color: #8f120e;">
                                Supprimer
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection