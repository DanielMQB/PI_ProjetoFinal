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
    <div class="container">
        <h1>Lista de Ingressos</h1>

        <a class="btn btn-primary shadow-lg" href="{{route('ingressos.create')}}" role="button">Adicionar ingresso</a>
    </div>

    <hr>

    <br>


    <div class="container">
        @if (session('message'))
            <div>
                {{ session('message') }}
            </div>
        @endif
        <div>

                <p>
                    <table class="table table-hover">
                        <thead style="background-color: #adb5bd">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome do Comprador</th>
                                <th scope="col">Tipo de Ingresso</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Parque</th>
                                <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        @foreach ($ingressos as $ingresso)
                        <tbody>
                            <tr>
                                <th scope="col">{{$ingresso->id}}</th>
                                <td>{{$ingresso->nomeComprador}}</td>
                                <td>{{$ingresso->tipoIngresso}}</td>
                                <td>{{$ingresso->quantidade}}</td>
                                <td>{{$ingresso->parque_id}}</td>
                                <td>
                                    <a href="{{ route('ingressos.show', $ingresso->id) }}" style="padding-left: 0.2%">Ver detalhes</a>
                                    <a href="{{ route('ingressos.edit', $ingresso->id) }}" style="padding-left: 0.2%">Editar</a>
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
