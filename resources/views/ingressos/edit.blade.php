<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar ingresso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            background: #D6EAF8;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow sticky-top" style="background: #A3E4D7">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><b>Fundação FLorestal</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ingressos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="{{ route('ingressos.index') }}" class="dropdown-item">Lista de Ingressos</a>
                            </li>
                            <li><a href="{{ route('ingresso.unidades') }}" class="dropdown-item">Adicionar
                                    Ingresso</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Unidades
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="{{ route('unidades.index') }}" class="dropdown-item">Lista de Unidades</a>
                            </li>
                            <li><a href="{{ route('unidades.create') }}" class="dropdown-item">Adicionar Unidade</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Atrativos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="{{ route('atrativos.index') }}" class="dropdown-item">Lista de Atrativos</a>
                            </li>
                            <li><a href="{{ route('atrativos.create') }}" class="dropdown-item">Adicionar Atrativo</a>
                            </li>
                        </ul>
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
                                Acesso
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

    <h1 class="container-fluid">Editar ingresso</h1>

    <hr>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container-fluid">
        <div class="card shadow" style="width: 25rem; background: #5DADE2">
            <div class="card-body">
                <h5 class="card-title">{{ $ingresso->nomeComprador }}</h5>
                @if ($ingresso->tipoIngresso == 'VIP')
                    <h6 class="card-subtitle mb-2 text-warning">{{ $ingresso->tipoIngresso }}</h6>
                @else
                    <h6 class="card-subtitle mb-2 text-muted">{{ $ingresso->tipoIngresso }}</h6>
                @endif
                <form action="{{ route('ingressos.update', $ingresso->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <p>Quantidade: <input type="text" name="quantidade" id="quantidade"
                            placeholder="Digite a quantidade" value="{{ $ingresso->quantidade }}"></p>
                    <p>Tipo de ingresso: <input type="text" name="tipoIngresso" id="tipoIngresso"
                            placeholder="Digite o tipo de ingresso" value="{{ $ingresso->tipoIngresso }}"></p>
                    <p>Nome do comprador: <input type="text" name="nomeComprador" id="nomeComprador"
                            placeholder="Digite o nome do comprador" value="{{ $ingresso->nomeComprador }}"></p>
                    <p>Data: <input type="date" name="data" id="data" value="{{ $ingresso->data }}">
                    </p>
                    <p>Status:
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status"
                                value="1">
                            <label class="form-check-label" for="status">
                                Válido
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status"
                                value="0">
                            <label class="form-check-label" for="status">
                                Inválido
                            </label>
                        </div>
                        </p>
                    <div class="container-fluid">
                        <div class="row">
                            <button class="card-link btn shadow col" style="margin-right: 1%; background: #AED6F1"
                                type="submit">Enviar</button>
                            <a class="card-link btn shadow col" style="background: #AED6F1" href="{{ route('ingressos.index') }}"
                                role="button">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- <div class="container-fluid">
        <form action="{{ route('ingressos.update', $ingresso->id) }}" method="POST">
            @method('PUT')
            @csrf
            <p>Quantidade: <input type="text" name="quantidade" id="quantidade" placeholder="Digite a quantidade"
                    value="{{ $ingresso->quantidade }}"></p>
            <p>Tipo de ingresso: <input type="text" name="tipoIngresso" id="tipoIngresso"
                    placeholder="Digite o tipo de ingresso" value="{{ $ingresso->tipoIngresso }}"></p>
            <p>Nome do comprador: <input type="text" name="nomeComprador" id="nomeComprador"
                    placeholder="Digite o nome do comprador" value="{{ $ingresso->nomeComprador }}"></p>
            <p>ID do parque: <input type="text" name="parque_id" id="parque_id" placeholder="Digite o ID do parque"
                    value="{{ $ingresso->parque_id }}"></p>
            <div class="container-fluid">
                <div class="row">
                    <button class="btn btn-success shadow col-1" style="margin-right: 1%" type="submit">Enviar</button>
                    <a class="btn btn-secondary shadow col-1" href="{{ route('ingressos.index') }}"
                        role="button">Cancelar</a>
                </div>
            </div>
        </form>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>
