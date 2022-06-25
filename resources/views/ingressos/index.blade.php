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
    <nav class="navbar bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Parque da Serra do Mar</a>
            <div class="navbar-brand">
                @if (Route::has('login'))
                    <div class="row">
                        <div class="col">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-dark shadow-lg" role="button">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-dark shadow-lg" role="button">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-dark shadow-lg" role="button">Register</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Lista de Ingressos</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <a class="btn btn-primary shadow-lg" href="{{ route('ingressos.create') }}" role="button">Adicionar
            ingresso</a>
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
                        <th scope="col" class="h4" style="text-align: left">Nome do Comprador</th>
                        <th scope="col" class="h4" style="text-align: center">Tipo de Ingresso</th>
                        <th scope="col" class="h4" style="text-align: center">Quantidade</th>
                        <th scope="col" class="h4" style="text-align: center">Parque</th>
                        <th scope="col" class="h4" style="text-align: center">Opções</th>
                    </tr>
                </thead>
                @foreach ($ingressos as $ingresso)
                    <tbody>
                        <tr>
                            <th scope="col" class="h3" style="text-align: center">{{ $ingresso->id }}</th>
                            <td class="col h3" style="text-align: left">{{ $ingresso->nomeComprador }}</td>
                            @if ($ingresso->tipoIngresso == 'VIP')
                                <td class="col h3" style="text-align: center; color: #ffc107">
                                    {{ $ingresso->tipoIngresso }}</td>
                            @else
                                <td class="col h3" style="text-align: center">{{ $ingresso->tipoIngresso }}</td>
                            @endif
                            <td class="col h3" style="text-align: center">{{ $ingresso->quantidade }}</td>
                            <td class="col h3" style="text-align: center">{{ $ingresso->parque_id }}</td>
                            <td class="col" style="text-align: center">
                                <a class="btn btn-light shadow-sm"
                                    href="{{ route('ingressos.show', $ingresso->id) }}" role="button"
                                    style="text-align: center">Ver detalhes</a>
                                <a class="btn btn-light shadow-sm"
                                    href="{{ route('ingressos.edit', $ingresso->id) }}" role="button"
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
