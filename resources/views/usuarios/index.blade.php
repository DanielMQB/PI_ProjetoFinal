
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>

    @if(session('message'))
        <div>
            {{session('message')}}
        </div>
    @endif

    <h1>Usuarios</h1>

    @foreach ($usuarios as $usuario )
    <p>
        {{$usuario->name}}

        <a href="{{route('usuarios.show', $usuario->$id) }}">[Revelar Detalhes] </a>
        <a href="{{ route('usuarios.edit', $usuario->id) }}">[](Editar)</a>
    </p>

    @if(session('message'))
        <div>
            {{session('message')}}
        </div>
    @endif

    @endforeach
</body>
</html>
