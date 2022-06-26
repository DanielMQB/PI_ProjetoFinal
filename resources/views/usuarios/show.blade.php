<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Usuario</title>
</head>
<body>
    <h1>Mostrar Detalhes do Usuario : {{$usuario->name}}</h1>

    <ul>
        <li>Nome : {{$usuario->name}}</li>
        <li>Email : {{$usuario->email}}</li>
        <li>CPF : {{$usuario->cpf}}</li>
        <li>Telefone : {{$usuario->telefone}}</li>


    </ul>
    <form action="{{route('usuarios.destroy', $usuario->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value ="DELETE">
        <button type="submit">Deletar Usuario => {{$usuario->name}}</button>
    </form>


</body>
</html>

