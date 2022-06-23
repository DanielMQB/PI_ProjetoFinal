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
    <div>
        @foreach ($ingressos as $ingresso)
            <p>ID: {{$ingresso->id}}</p>
            <p>Quantidade: {{$ingresso->quantidade}}</p>
            <p>Tipo de ingresso: {{$ingresso->tipoIngresso}}</p>
            <p>Nome do comprador: {{$ingresso->nomeComprador}}</p>
            <p>Parque: {{$ingresso->parque_id}}</p>
        @endforeach
    </div>
</body>
</html>
