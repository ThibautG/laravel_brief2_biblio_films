<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FavMovies✨</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light text-dark d-flex flex-column align-items-center p-4 p-lg-5 min-vh-100">
    <header class="d-flex flex-column flex-md-row justify-content-between align-items-center py-4 border-bottom mb-4">
        <h1 class="mb-3 mb-md-0 fw-bold text-primary">
            🎬
            <a class="link-offset-2 link-underline link-underline-opacity-0"
               href="{{ route('movies.index') }}">
                FavMovies
            </a>
            ✨
        </h1>
        <a href="{{ route('movies.create') }}" class="btn btn-success">
            + Ajouter un film
        </a>
    </header>

    <main class="container">
        {{$slot}}
    </main>

    <footer class="text-center text-muted py-4 border-top mt-5">
        <p class="mb-1">🎬 FavMovies ✨ — Votre sélection cinéma, en un clic.</p>
        <p class="mb-0">
            Projet étudiant réalisé avec ❤️ sous Laravel & SQLite.
        </p>
        <p class="mt-2">
            &copy; 2025 FavMovies. Tous droits réservés.
        </p>
    </footer>
</body>
</html>
