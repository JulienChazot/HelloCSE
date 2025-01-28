@extends('layouts.app')
@section('content')
    <h1>
        Login
    </h1>
</div>
</div>
<div class="darksection">
    <div class="container">
        <div class="connexion">
            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div>
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit">Se connecter</button>
            </form>
        </div>
        <div class="newaccount">
        <form method="POST" action="{{ route('register.admin') }}">
            @csrf
            <div>
                <label for="new_email">Email :</label>
                <input type="email" name="email" id="new_email" required>
            </div>
            <div>
                <label for="new_name">Nom :</label>
                <input type="text" name="name" id="new_name" required>
            </div>
            <div>
                <label for="new_password">Mot de passe :</label>
                <input type="password" name="password" id="new_password" required>
            </div>
            <div>
                <label for="confirm_password">Confirmer le mot de passe :</label>
                <input type="password" name="password_confirmation" id="confirm_password" required>
            </div>
            <button type="submit">Créer un administrateur</button>
        </form>
    </div>
    </div>
</div>
@endsection