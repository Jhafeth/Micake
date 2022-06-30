<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>MiCake - @yield('titulo')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
     
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black"> MiCake </h1>

            @auth
                <nav class="flex gap-8 items-baseline">

                    @can('usuario.index')
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('usuario.index') }}">
                            Gestionar Usuarios
                        </a>
                    @endcan

                    @can('producto.index')
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('producto.index') }}">
                            Gestionar Productos
                        </a>
                    @endcan

                    @can('receta.index')
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('receta.index') }}">
                            Gestionar Recetas
                        </a>
                    @endcan

                    @can('ingrediente.index')
                        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('ingrediente.index') }}">
                            Gestionar Ingredientes
                        </a>
                    @endcan

                    @can('pedido.create')
                        <a class="font-bold uppercase text-gray-600 text-sm" href="">
                            Comprar Productos
                        </a>
                    @endcan

                    @can('medida.index')
                    <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('medida.index') }}">
                        Gestionar Medidas
                    </a>
                @endcan

                    @can('pedido.index')
                        <a class="font-bold uppercase text-gray-600 text-sm" href="">
                            Gestionar Pedidos
                        </a>
                    @endcan

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                            Cerrar Sesion
                        </button>
                    </form>
                </nav>
            @endauth

            @guest
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login') }}">
                        Iniciar Sesion
                    </a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('cliente.create') }}">
                        Crear Cuenta
                    </a>
                </nav>
            @endguest

        </div>
    </header>


    <main class="container mx-auto mt-10">

        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>

        @yield('contenido')

    </main>



    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        MiCake - Todos los derechos reservados {{ now()->year }}
    </footer>

</body>

</html>
