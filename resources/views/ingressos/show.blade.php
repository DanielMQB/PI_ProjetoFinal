<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do ingresso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><b>Parque da Serra do Mar</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('ingressos.index') }}">Ingressos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ingressos.create') }}">Adicionar Ingressos</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('login'))
                            <div class="row">
                                <div class="col">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dashboard
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a href="{{ route('login') }}" class="dropdown-item">Login</a></li>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                                @endif
                            </ul>
                        </li>
                    @endauth
            </div>
        </div>
        @endif
    </nav>

    <br>

    <h1 class="container-fluid">Detalhes do ingresso</h1>

    <hr>
    <div class="container-fluid">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $ingresso->nomeComprador }}</h5>
                @if ($ingresso->tipoIngresso == 'VIP')
                    <h6 class="card-subtitle mb-2 text-warning">{{ $ingresso->tipoIngresso }}</h6>
                @else
                    <h6 class="card-subtitle mb-2 text-muted">{{ $ingresso->tipoIngresso }}</h6>
                @endif
                <p class="card-text">
                <ul>
                    <li>Quantidade: {{ $ingresso->quantidade }}</li>
                    <li>Parque: {{ $ingresso->parque_id }}</li>
                </ul>
                </p>
                <div class="container">
                    <div class="row">
                        <form class="col" action="{{ route('ingressos.destroy', $ingresso->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <a class="card-link btn btn-danger shadow" type="submit" role="button">Deletar
                                Ingresso</a>
                        </form>
                        <a class="card-link btn btn-secondary shadow col" href="{{ route('ingressos.index') }}"
                            role="button">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
