<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parque da Serra do Mar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary shadow sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><b>Parque da Serra do Mar</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ingressos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="{{ route('ingressos.index') }}" class="dropdown-item">Lista de Ingressos</a>
                            </li>
                            <li><a href="{{ route('ingresso.unidades') }}" class="dropdown-item">Adicionar Ingresso</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Unidades
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="{{ route('unidades.index') }}" class="dropdown-item">Lista de Unidades</a>
                            </li>
                            <li><a href="{{ route('unidades.create') }}" class="dropdown-item">Adicionar Unidade</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Atrativos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="{{ route('atrativos.index') }}" class="dropdown-item">Lista de Atrativos</a>
                            </li>
                            <li><a href="{{ route('atrativos.create') }}" class="dropdown-item">Adicionar Atrativo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('login'))
                            <div class="row">
                                <div class="col">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dashboard
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a href="{{ route('login') }}" class="dropdown-item">Login</a></li>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                                @endif
                            </ul>
                        </li>
                    @endauth
            </div>
        </div>
        @endif
    </nav>

    <br>

    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Vista-da-Serra-do-Mar-Ubatuba-170717.jpg"
                        style="height: 10cm" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://smastr16.blob.core.windows.net/guiadeaps/2021/04/ucatrativo_i1a797d24-ff5c-462d-94a0-56cd20fc39c6.jpg"
                        style="height: 10cm" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://www.passagenspromo.com.br/blog/wp-content/uploads/2020/11/serra-do-mar-trilhas.jpg"
                        style="height: 10cm" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próxima</span>
            </button>
        </div>
    </div>

    <br>
    <br>

    <div class="container">
        <div class="row text-break">
            <h1 class="row">Quem somos nós?</h1>
            <p class="col-5 text-break">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent euismod, elit nec ornare viverra, odio
                nisl accumsan mi, eget laoreet dolor erat ac nunc. Curabitur tincidunt blandit vulputate. Duis lacinia
                viverra pulvinar. Fusce condimentum justo sem, id sodales lectus tempus hendrerit. In at rutrum orci,
                quis vehicula lorem. Nulla congue vehicula mauris, eget bibendum felis mollis nec. Cras venenatis, sem
                sed pharetra faucibus, tellus justo posuere nisi, sed ornare orci justo commodo est. Sed eu neque
                mattis, tincidunt lacus vitae, placerat eros. Cras hendrerit arcu vitae rhoncus tempor. Integer quis
                elementum tellus, eget venenatis ligula.
            </p>
            <br>
            <br>
            <p class="col-7 text-break">
                Sed est nunc, accumsan sed ornare non, tempus sit amet ipsum. Curabitur et libero molestie, mattis est
                nec, tempor lectus. Proin aliquet, arcu eu sodales elementum, eros est ultrices lorem, ac commodo quam
                justo et quam. Nunc vitae finibus dolor, ut condimentum tortor. Etiam pharetra auctor mi, sed viverra
                neque blandit vel. Proin viverra lacus tellus, fermentum eleifend nunc porttitor eget. Phasellus nec
                nulla nunc. Nulla nec hendrerit enim. Sed ac turpis vel risus laoreet venenatis ut non metus. Fusce
                porttitor augue at sollicitudin vestibulum. Proin non purus ac justo laoreet congue. Donec vestibulum
                ipsum in mi viverra pulvinar. Aliquam scelerisque eros sit amet eros consectetur malesuada. Vivamus quis
                sem eu enim molestie egestas a sed nunc. Integer ante nibh, accumsan et imperdiet a, faucibus in sapien.
            </p>
            <br>
            <br>
            <h1 class="row">Onde nos encontrar?</h1>
            <p class="row text-break">
                Ut faucibus hendrerit mauris, sit amet vestibulum nulla feugiat id. Nulla vitae mauris scelerisque,
                sagittis
                est
                ut, fermentum sem. Aliquam nec malesuada augue. Curabitur ut sem enim. Mauris pretium scelerisque massa,
                ut
                blandit ligula congue non. Integer in dapibus ante. Cras tristique, sem ut viverra placerat, sapien nisl
                blandit
                urna, sit amet faucibus arcu lacus et nunc. Fusce cursus mi vel est porta faucibus. Maecenas dignissim
                sagittis
                eros vitae porta. Vivamus ut condimentum lectus, et porttitor augue. Proin a urna erat. Duis sagittis
                auctor
                aliquam. Nam pellentesque hendrerit urna. Mauris sed lorem viverra, ultricies augue et, accumsan enim.
            </p>
            <br>
            <br>
            <h1 class="row">Porque nos escolher?</h1>
            <p class="col-7 text-break">
                Pellentesque mattis lacus vel eros rutrum viverra. Curabitur non vulputate ex. Class aptent taciti
                sociosqu
                ad
                litora torquent per conubia nostra, per inceptos himenaeos. Integer tincidunt sapien a velit faucibus,
                vitae
                sodales nibh finibus. Donec mattis et orci a sagittis. Nulla eu urna est. In in nisl facilisis, ultrices
                sem
                ut,
                sodales justo. Suspendisse blandit ex in augue molestie, fermentum elementum tellus interdum. Vivamus
                egestas,
                arcu sit amet auctor auctor, orci erat condimentum metus, non malesuada quam justo quis nibh. Vivamus
                posuere,
                diam ac ullamcorper posuere, leo nisl ultricies enim, id consequat nunc mauris tempor augue. Donec sit
                amet
                ligula elementum, dapibus elit quis, commodo justo. Curabitur vehicula leo leo, ut faucibus dolor
                viverra a.
                Vivamus sit amet placerat mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                auctor
                non
                ligula sed lobortis. Cras id dui sit amet justo aliquet cursus.
            </p>
            <br>
            <br>
            <p class="col-4 text-break">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci massa, interdum ut semper sit amet,
                tempus
                consectetur velit. Nulla consequat, dui in viverra ultrices, elit nibh auctor lectus, sit amet hendrerit
                risus
                nibh ut lorem. Sed congue justo eget est porta pellentesque. Sed eget arcu nulla. Vestibulum fermentum
                metus
                lacus. Vestibulum neque enim, posuere non erat blandit, vestibulum ullamcorper nunc. Cras hendrerit dui
                vitae
                auctor euismod. Donec nec nulla pretium, lobortis lorem ut, sollicitudin arcu. In vitae consectetur
                quam.
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
