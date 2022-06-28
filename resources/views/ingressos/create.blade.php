<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Ingresso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary shadow sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><b>Parque da Serra do Mar</b></a>
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
                            <li><a href="{{ route('ingressos.create') }}" class="dropdown-item">Adicionar Ingresso</a>
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

    <h1 class="container-fluid">Adicionar novo ingresso</h1>

    <hr>

    <div class="container-fluid">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">Novo Ingresso</h5>
                <form method="POST" action="{{ route('ingressos.store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p>Quantidade: <input type="text" name="quantidade" id="quantidade" placeholder="Digite aqui"
                            value="{{ old('quantidade') }}"></p>
                    <p>Tipo de ingresso: <input type="text" name="tipoIngresso" id="tipoIngresso"
                            placeholder="Digite aqui" value="{{ old('tipoIngresso') }}"></p>
                    <p>Nome do comprador: <input type="text" name="nomeComprador" id="nomeComprador"
                            placeholder="Digite aqui" value="{{ old('nomeComprador') }}"></p>
                    <p>Data do ingresso: <input type="date" name="data" id="data"
                            value="{{ old('data') }}"></p>


                    <p>Unidade : <select name="unidade_id" id="unidade_id">
                             <option value="" selected>Selecione um Parque</option>
                             @foreach ($unidades as $unidade)
                                 <option value="{{$unidade->id}}">{{$unidade->nome}}</option>
                                @endforeach
                     </select></p>


                    <div class="row">
                        <button class="card-link btn btn-primary shadow col" type="submit">Enviar</button>
                        <a class="card-link btn btn-secondary shadow col" href="{{ route('ingressos.index') }}"
                            role="button">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid">
        <form method="POST" action="{{ route('ingressos.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p>Quantidade: <input type="text" name="quantidade" id="quantidade" placeholder="Digite a quantidade"
                    value="{{ old('quantidade') }}"></p>
            <p>Tipo de ingresso: <input type="text" name="tipoIngresso" id="tipoIngresso"
                    placeholder="Digite o tipo de ingresso" value="{{ old('tipoIngresso') }}"></p>
            <p>Nome do comprador: <input type="text" name="nomeComprador" id="nomeComprador"
                    placeholder="Digite o nome do comprador" value="{{ old('nomeComprador') }}"></p>
            <p>ID do parque: <input type="text" name="parque_id" id="parque_id"
                    placeholder="Digite o ID do parque" value="{{ old('parque_id') }}"></p>
            <p><button class="btn btn-primary shadow" type="submit">Enviar</button></p>
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
