<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITAR USUARIO</title>
</head>
<body>
    <h1>Editar Usuario {{$usuario->nome}}</h1>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>

        @endforeach

    @endif

    <div>
        <form method="post" action="{{ route('usuarios.update', $usuario->id)}}">
            @method('put')
            @csrf
            <p>Nome     : <input type="text" name="name" id="name" placeholder="Digite o Nome" value="{{$usuario->name}}"></p>
            <p>Email    : <input type="text" name="email" id="email" placeholder="Digite o Email" value="{{$usuario->email}}"></p>
            <p>CPF      : <input type="text" name="cpf" id="cpf" placeholder="Digite o CPF" value="{{$usuario->cpf}}"></p>
            <p>Telefone : <input type="text" name="telefone" id="telefone" placeholder="Digite o Telefone" value="{{$usuario->telefone}}"></p>
            <p><button type="submit">Atualizar</button></p>

        </form>


    </div>

</body>
</html>
