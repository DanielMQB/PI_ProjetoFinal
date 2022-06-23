<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    Usuarios
    @foreach (@$usuarios as @usuario )

    <p>Nome : {{@usuario->nome}}</p>
    <p>Email : {{@usuario->email}}</p>
    <p>Senha : {{@usuario->senha}}</p>
    <hr>

    @endforeach
</body>
</html>
