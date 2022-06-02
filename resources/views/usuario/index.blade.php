@extends('layouts.app')

@section('titulo')
    Gestionar Usuarios
@endsection

@section('contenido')

    <body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">

        <!--Container-->
        <div class="container w-full md:w-4/5 xl:w-full  mx-auto px-2">
            <!--Card-->
            <h2 class="font-black text-center text-3xl mb-10">
                Clientes
            </h2>
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                <table id="example" class="stripe hover text-center"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th>Ci</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ($lectores as $persona)
                        @if ($persona->user->type == 0)
                            <tr>
                                <td>{{ $persona->ci }}</td>
                                <td>{{ $persona->user->name }}</td>
                                <td>{{ $persona->user->email }}</td>
                                <td>{{ $persona->telefono }}</td>
                                <td>{{ $persona->direccion }}</td>
                                @if ($persona->lector->estado == 1)
                                    <td>activo</td>
                                @else
                                    <td>no activo</td>
                                @endif
                                <td>
                                    <button class="bg-red-600 font-bold w-2/3 p-3 text-white rounded-lg" type="submit">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
            <!--Tabla bibliotecarios-->
            <h2 class="font-black text-center text-3xl mb-10">
                Empleados
            </h2>
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                <table id="example" class="stripe hover text-center"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th>Ci</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Codigo</th>
                            <th></th>
                        </tr>
                    </thead>

                    @foreach ($bibliotecarios as $persona)
                        @if ($persona->user->type == 1)
                            <tr>
                                <td>{{ $persona->ci }}</td>
                                <td>{{ $persona->user->name }}</td>
                                <td>{{ $persona->user->email }}</td>
                                <td>{{ $persona->telefono }}</td>
                                <td>{{ $persona->direccion }}</td>
                                <td>{{ $persona->bibliotecario->codigo }}</td>
                                
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
            <!--/Card-->
        </div>
        <!--/container-->
    @endsection
