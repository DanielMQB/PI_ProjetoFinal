<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingressos</title>
</head>
<body>
    <h1>Lista de Ingressos</h1>

    <hr>

    <p>
        <a href="{{route('ingressos.create')}}">Inserir novo ingresso</a>
    </p>

    <br>

    @if (session('message'))
        <div>
            {{session('message')}}
        </div>
    @endif
    <div>
        @foreach ($ingressos as $ingresso)
            <p>
                {{$ingresso->nomeComprador}}
                <a href="{{route('ingressos.show', $ingresso->id)}}">Ver detalhes</a>
            </p>
        @endforeach
    </div>
</body>
</html>
