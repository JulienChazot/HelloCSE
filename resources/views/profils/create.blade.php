@extends('layouts.app')
@section('content')
<h1>Créer le Profil</h1>
</div>
</div>
<div class="darksection">
    <div class="container">
                    <!-- Je créer un formulaire, j'informe son action qui est la redirection vers sa route qui amène vers son controller -->
        <form action="{{ route('profils.store') }}" method="POST" enctype="multipart/form-data" class="bg-sky-200 rounded-xl p-4 max-w-4xl mx-auto">
            @csrf

            <div class="form-group mb-4">
                <label for="first_name">Prénom</label>
                <!-- J'informe pour chaque input son type et j'écris required à la fin si l'information est obligatoire -->
                <input type="text" class="form-control w-full p-2 border rounded" id="first_name" name="first_name" required>
            </div>

            <div class="form-group mb-4">
                <label for="last_name">Nom</label>
                <input type="text" class="form-control w-full p-2 border rounded" id="last_name" name="last_name" required>
            </div>

            <div class="form-group mb-4">
                <label for="image">Image (format de type image) [.jpg / .pjeg / .jfif / .pjpeg / .pjp / .png / .svg]</label>
                <input type="file" class="form-control w-full p-2 border rounded" id="image" name="image" accept="image/*">
            </div>

            <div class="form-group mb-4">
                <label for="status">Statut</label>
                <select class="form-control w-full p-2 border rounded" id="status" name="status">
                    <option value="inactive">Inactif</option>
                    <option value="pending">En attente</option>
                    <option value="active">Actif</option>
                </select>
            </div>

            <div class="flex space-x-2 mt-3">
                <a href="http://127.0.0.1:8000/profils" class="bg-gray-400 text-white p-2 rounded text-center">Retour</a>
                <button type="submit" class="bg-[#b38e4a] text-white p-2 rounded text-center">Créer le profil</button>
            </div>
        </form>
    </div>
</div>
@endsection