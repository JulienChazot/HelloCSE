@extends('layouts.app')
@section('content')
    <h1>
        Connexion
    </h1>
</div>
</div>
<div class="darksection">
        <div class="container flex justify-between items-start">
            <div class="connexion w-full md:w-1/2 p-10 bg-sky-200 rounded-lg mr-4">
            <h2>Se connecter</h2>
            <!-- Je créer un formulaire, j'informe son action qui est la redirection vers sa route qui amène vers son controller -->
                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <div>
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" required class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" id="password" required class="w-full p-2 border rounded">
                    </div>
                    <button type="submit" class="mt-3 bg-[#b38e4a] text-white p-2 rounded">Se connecter</button>
                </form>
            </div>

            <div class="newaccount w-full md:w-1/2 p-10 bg-sky-200 rounded-lg ml-4">
                <h2>Créer un compte</h2>
                <!-- Je créer un formulaire, j'informe son action qui est la redirection vers sa route qui amène vers son controller -->
                <form method="POST" action="{{ route('register.admin') }}">
                    @csrf
                    <div>
                        <label for="new_email">Email :</label>
                        <input type="email" name="email" id="new_email" required class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label for="new_name">Nom :</label>
                        <input type="text" name="name" id="new_name" required class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label for="new_password">Mot de passe :</label>
                        <input type="password" name="password" id="new_password" required class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label for="confirm_password">Confirmer le mot de passe :</label>
                        <input type="password" name="password_confirmation" id="confirm_password" required class="w-full p-2 border rounded">
                    </div>
                    <button type="submit" class="mt-3 bg-[#b38e4a] text-white p-2 rounded">Créer un administrateur</button>
                </form>
            </div>
        </div>
    </div>
@endsection