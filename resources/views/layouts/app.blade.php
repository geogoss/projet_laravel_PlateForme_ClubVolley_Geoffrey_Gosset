    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                        <a class="nav-link" href="/player">Joueur</a>
                        <a class="nav-link" href="/player/create">Créer Joueur</a>
                        <a class="nav-link" href="/club">Club</a>
                        <a class="nav-link" href="/club/create">Créer un club</a>
                        <a class="nav-link" href="/photo">Photo</a>
                        <a class="nav-link" href="/photo/create">Importer une photo</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
