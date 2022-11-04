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

        @media(max-width: 575.98px) {
            sidebar{
                z-index : 3;
            }
            main{
                z-index : 1;
            }
        }

    </style>
</head>

<body class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand d-inline-block w-25" href="{{ url('/') }}"><img src="../../images/logo.webp" class="img-thumbnail"></a>
            <button type="button" id="btn-menu" class="d-block d-sm-none" onclick="toggleMenu()"><i class="fa-solid fa-bars"></i></button>
        </nav>


    </header>

    <div class="row m-0 vh-100">
        <sidebar id="sideMenu" class="col-6 col-sm-2 col-xl-2 m-0 vh-100 d-block bg-dark">

            <!--List group-->
            <div class="list-group align-items-center">
                <a href="{{route('clientes.index')}}" class="list-group-item list-group-item-action active mt-4 " aria-current="true">
                    <i class="fa-solid fa-user "></i> <span class="ms-3 d-sm-none d-md-block" >CLIENTES</span>
                </a>
                <a href="{{route('productos.index')}}" class="list-group-item list-group-item-action active mt-4" aria-current="true">
                    <i class="fa-solid fa-laptop "></i> <span class="ms-3 d-sm-none d-md-block">PRODUCTOS</span>
                </a>
                <a href="{{route('proveedores.index')}}" class="list-group-item list-group-item-action active mt-4" aria-current="true">
                    <i class="fa-solid fa-handshake "></i> <span class="ms-3 d-sm-none d-md-block">PROVEEDORES</span>
                </a>
                <a href="{{route('fabricantes.index')}}" class="list-group-item list-group-item-action active mt-4" aria-current="true">
                    <i class="fa-solid fa-user "></i> <span class="ms-3 d-sm-none d-md-block">FABRICANTES</span>
                </a>
                <a href="{{route('categorias.index')}}" class="list-group-item list-group-item-action active mt-4" aria-current="true">
                    <i class="fa-solid fa-square-minus "></i> <span class="ms-3 d-sm-none d-md-block">CATEGORIAS</span>
                </a>
                <a href="{{route('subcategorias.index')}}" class="list-group-item list-group-item-action active mt-4" aria-current="true">
                    <i class="fa-solid fa-square-minus "></i> <span class="ms-3 d-sm-none d-md-block">SUBCATEGORIAS</span>
                </a>

            </div>
            <!--END List group-->
        </sidebar>
        <main id="mainContent" class="col-6 col-sm-10 col-xl-10 m-0 vh-100">
            @yield('content')

        </main>
    </div>



    @livewireScripts
    @yield('scripts')
    <script>
        function toggleMenu(){
            const element = document.getElementById('sideMenu');
            element.classList.toggle('d-none');
            document.getElementById('mainContent').classList.toggle('col-6');

        }
    </script>
</body>

</html>
