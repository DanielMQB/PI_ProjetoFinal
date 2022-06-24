<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do ingresso</title>
</head>
<body>
    <h1>Detalhes do ingresso</h1>

    <a href="{{'ingressos.index'}}">Voltar</a>

    <hr>

    <div>
        <ul>
            <li>Quantidade: {{$ingresso->quantidade}}</li>
            <li>Tipo de ingresso: {{$ingresso->tipoIngresso}}</li>
            <li>Nome do Comprador: {{$ingresso->nomeComprador}}</li>
            <li>Parque: {{$ingresso->parque_id}}</li>
        </ul>
        <form action="{{route('ingressos.destroy', $ingresso->id)}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit">Deletar Ingresso</button>
        </form>
    </div>
</body>
</html>
