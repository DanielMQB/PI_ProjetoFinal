<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Ingresso</title>
</head>
<body>
    <h1>Adicionar novo ingresso</h1>
    <div>
        <form method="POST" action="{{route('ingressos.store')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <p>Quantidade: <input type="text" name="quantidade" id="quantidade" placeholder="Digite a quantidade" value="{{old('quantidade')}}"></p>
            <p>Tipo de ingresso: <input type="text" name="tipoIngresso" id="tipoIngresso" placeholder="Digite o tipo de ingresso" value="{{old('tipoIngresso')}}"></p>
            <p>Nome do comprador: <input type="text" name="nomeComprador" id="nomeComprador" placeholder="Digite o nome do comprador" value="{{old('nomeComprador')}}"></p>
            <p>ID do parque: <input type="text" name="parque_id" id="parque_id" placeholder="Digite o ID do parque" value="{{old('parque_id')}}"></p>
            <p><button type="submit">Enviar</button></p>
        </form>
    </div>
</body>
</html>
