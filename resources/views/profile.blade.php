<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil utilisateur</title>
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

        <h1>Mon profil</h1>
        <p class="subtitle">Informations de votre compte.</p>

        <ul class="info-list">
            <li><span class="info-label">Nom</span> <strong>{{ $user->name }}</strong></li>
            <li><span class="info-label">Email</span> <strong>{{ $user->email }}</strong></li>
            <li><span class="info-label">Inscrit le</span> <strong>{{ $user->created_at->format('d/m/Y à H:i') }}</strong></li>
        </ul>
    </div>
</body>
</html>