<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Unidade</title>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ingressos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="{{ route('ingressos.index') }}" class="dropdown-item">Lista de Ingressos</a>
                            </li>
                            <li><a href="{{ route('ingresso.unidades') }}" class="dropdown-item">Adicionar Ingresso</a>
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

    <h1 class="container-fluid">Adicionar nova unidade</h1>

    <hr>

    <div class="container-fluid">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">Nova Unidade</h5>
                <form method="POST" action="{{ route('unidades.store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p>Nome da Unidade: <input type="text" name="nome" id="nome" placeholder="Digite aqui"
                            value="{{ old('nome') }}"></p>
                    <p>Quantidade: <input type="text" name="quantidade" id="quantidade" placeholder="Digite aqui"
                            value="{{ old('quantidade') }}"></p>
                    <p>Valor do Ingresso: <input type="text" name="valorIngresso" id="valorIngresso"
                            placeholder="Digite aqui" value="{{ old('valorIngresso') }}"></p>
                    <p>Descrição: <input type="text" name="descricao" id="descricao" placeholder="Digite aqui"
                            value="{{ old('descricao') }}"></p>
                    <p>Endereço: <input type="text" name="endereco" id="endereco" placeholder="Digite aqui"
                            value="{{ old('endereco') }}"></p>
                    <p>Dias de Funcionamento:
                        @foreach ($dias as $dia)
                        <div class="col-12">

                            <div class="form-check">
                              <input name="dias[]" value="{{$dia->id}}" class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                                {{$dia->dia}}
                              </label>
                            </div>
                          </div>
                        @endforeach

                    </p>
                    <div class="row">
                        <button class="card-link btn btn-primary shadow col" type="submit">Enviar</button>
                        <a class="card-link btn btn-secondary shadow col" href="{{ route('unidades.index') }}"
                            role="button">Cancelar</a>
                    </div>
                </form>
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
