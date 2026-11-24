<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container container--wide">
        <div class="nav-bar">
            <div class="nav-links">
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">Tableau de bord</a>
                <a href="{{ route('profile') }}" class="btn btn-secondary">Mon profil</a>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-danger">Se déconnecter</button>
            </form>
        </div>

        <h1>Tableau de bord</h1>
        <p class="subtitle">Bienvenue, <strong>{{ $user->name }}</strong> ! Vous êtes connecté.</p>
    </div>
</body>
</html>