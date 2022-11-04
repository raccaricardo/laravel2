<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    @livewireStyles

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url("../../../resources/images/double-bubble-dark.webp");
        }
    </style>
</head>

<body class="container">

    <header class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand d-inline-block w-25" href="{{ url('/') }}"><img src="../../images/logo.webp" class="img-thumbnail"></a>
                </nav>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Mauri Computacion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Clientes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('clientes.index') }}">Listado</a></li>
                                <li><a class="dropdown-item" href="{{ route('clientes.create') }}">Agregar cliente</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Proveedores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="{{ route('proveedores.index') }}">Listado</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('proveedores.create') }}">Agregar nuevo
                                        Proveedor</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('productos.index') }}">Listado de
                                        productos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('categorias.index') }}">Listado
                                        Categorias</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav> -->
        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i></button>

        <div class="offcanvas offcanvas-start show w-25" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <!-- <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Titulo</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">





                        <div class="accordion-body">
                            <!--List group-->
                            <div class="list-group">
                                <a href="{{route('clientes.index')}}" class="list-group-item list-group-item-action active" aria-current="true">
                                <i class="fa-solid fa-user me-3"></i> CLIENTES
                                </a>
                                <a href="{{route('productos.index')}}" class="list-group-item list-group-item-action active mt-2" aria-current="true">
                                <i class="fa-solid fa-laptop me-3"></i> PRODUCTOS
                                </a>
                                <a href="{{route('proveedores.index')}}" class="list-group-item list-group-item-action active mt-2" aria-current="true">
                                <i class="fa-solid fa-handshake me-3"></i> PROVEEDORES
                                </a>
                                <a href="{{route('fabricantes.index')}}" class="list-group-item list-group-item-action active mt-2" aria-current="true">
                                <i class="fa-solid fa-user me-3"></i>  FABRICANTES
                                </a>
                                <a href="{{route('categorias.index')}}" class="list-group-item list-group-item-action active mt-2" aria-current="true">
                                   <i class="fa-solid fa-square-minus me-3"></i> CATEGORIAS
                                </a>
                                <a href="{{route('subcategorias.index')}}" class="list-group-item list-group-item-action active mt-2" aria-current="true">
                                   <i class="fa-solid fa-square-minus me-3"></i> SUBCATEGORIAS
                                </a>

                            </div>
                            <!--END List group-->
                        </div>


                <!-- End body offcanvas-->
            </div>
        </div>
    </header>
    @yield('content')


    @livewireScripts
    @yield('scripts')
</body>

</html>
