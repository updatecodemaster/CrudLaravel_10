<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Product Log Seu espaco de produtos</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/0048184d5c.js" crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Product Log</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/usuarios">Usuários</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categoriasMenu as $categorias)
                                <li><a class="dropdown-item"
                                        href="{{ route('categorias', $categorias->id) }}">{{ $categorias->nome }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-light">Desabilitado</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Procure por produtos...."
                        aria-label="Search">
                    <button class="btn btn-success" type="submit">Procurar</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('conteudo')

</body>
<footer class="d-flex flex-wrap justify-content-between align-items-center  bg-primary">
    <p class="col-md-4 mb-0 text-body-secondary text-light">&copy; 2023 Company, Inc</p>

    <a href="/"
        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-light">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-light">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-light">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-light">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary text-light">About</a></li>
    </ul>
</footer>

</html>
