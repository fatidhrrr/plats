<link rel="stylesheet" href="{{asset("css/app.css")}}">

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-white" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('plat')}}">Plats</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('addSaveur')}}">Saveur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('show', 1)}}">Sucré</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('show', 2)}}">Salé</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('commande')}}">Commandes</a>
            </li>
        </ul>
    </div>
</nav>