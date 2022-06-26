<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingressos</title>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Lista de Atrativos</h1>
            </div>
        </div>
    </div>

    <hr>

    <br>


    <div class="container-fluid">
        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif
        <div>
            <p>
            <table class="table table-hover">
                <thead style="background-color: #F4F6F7">
                    <tr>
                        <th scope="col" class="h4" style="text-align: center">ID</th>
                        <th scope="col" class="h4" style="text-align: left">Nome do Atrativo</th>
                        <th scope="col" class="h4" style="text-align: center">Tipo</th>
                        <th scope="col" class="h4" style="text-align: center">Capacidade</th>
                        <th scope="col" class="h4" style="text-align: center">Unidade de Conservação</th>
                        <th scope="col" class="h4" style="text-align: center">Opções</th>
                    </tr>
                </thead>
                @foreach ($atrativos as $atrativo)
                    <tbody>
                        <tr>
                            <th scope="col" class="h3" style="text-align: center">{{ $atrativo->id }}</th>
                            <td class="col h3" style="text-align: left">{{ $atrativo->nome }}</td>
                            <td class="col h3" style="text-align: center">{{ $atrativo->tipo }}</td>
                            <td class="col h3" style="text-align: center">{{ $atrativo->capacidade }}</td>
                            <td class="col h3" style="text-align: center">{{ $atrativo->unidade_id }}</td>
                            <td class="col" style="text-align: center">
                                <a class="btn btn-light shadow-sm"
                                    href="{{ route('atrativos.show', $atrativo->id) }}" role="button"
                                    style="text-align: center">Ver detalhes</a>
                                <a class="btn btn-light shadow-sm"
                                    href="{{ route('atrativos.edit', $atrativo->id) }}" role="button"
                                    style="text-align: center">Editar</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            </p>
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
