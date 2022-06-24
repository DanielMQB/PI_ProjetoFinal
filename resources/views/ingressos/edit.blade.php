<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar ingresso</title>
</head>
<body>
    <h1>Editar ingresso</h1>

    <div>
        <a href="{{route('ingressos.index')}}">Voltar</a>
    </div>

    <hr>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <div>
        {{-- <form action="{{route('ingressos.update', $ingresso->id)}}" method="POST">
            @method('PUT')
            @csrf
            <p>Quantidade: <input type="text" name="quantidade" id="quantidade" placeholder="Digite a quantidade" value="{{$ingresso->quantidade}}"></p>
            <p>Tipo de ingresso: <input type="text" name="tipoIngresso" id="tipoIngresso" placeholder="Digite o tipo de ingresso" value="{{$ingresso->tipoIngresso}}"></p>
            <p>Nome do comprador: <input type="text" name="nomeComprador" id="nomeComprador" placeholder="Digite o nome do comprador" value="{{$ingresso->nomeComprador}}"></p>
            <p>ID do parque: <input type="text" name="parque_id" id="parque_id" placeholder="Digite o ID do parque" value="{{$ingresso->parque_id}}"></p>
            <p><button type="submit">Enviar</button></p>
        </form> --}}
    </div>
</body>
</html>
