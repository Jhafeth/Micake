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
                Administradores
            </h2>
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                <table id="example" class="stripe hover text-center"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ($administradores as $administrador)
                        @if ($administrador->user->type == 0)
                            <tr>
                                <td>{{ $administrador->name }}</td>
                                <td>{{ $administrador->email }}</td>
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
                            <th></th>
                        </tr>
                    </thead>
                    @foreach ($clientes as $cliente)
                        @if ($cliente->user->type == 1)
                            <tr>
                                <td>{{ $cliente->ci }}</td>
                                <td>{{ $cliente->user->name }}</td>
                                <td>{{ $cliente->user->email }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->direccion }}</td>
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
                            <th>
                                
                            </th>
                        </tr>
                    </thead>

                    @foreach ($empleados as $empleado)
                        @if ($empleado->user->type == 2)
                            <tr>
                                <td>{{ $empleado->ci }}</td>
                                <td>{{ $empleado->user->name }}</td>
                                <td>{{ $empleado->user->email }}</td>
                                <td>{{ $empleado->telefono }}</td>
                                <td>{{ $empleado->direccion }}</td>
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
            <!--/Card-->
        </div>
        <!--/container-->
    @endsection
