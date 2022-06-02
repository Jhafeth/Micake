@extends('layouts.app')

@section('titulo')
    Cuenta Administrador
@endsection

@section('contenido')
<div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
        <div class="md:w-8/12 lg:w-6/12 px-5">
            <p class="text-gray-700 text-2xl">
                Administrador: {{ auth()->user()->name }}
            </p>
            <p class="text-gray-700 text-2xl">
                Correo Electronico: {{ auth()->user()->email }}
            </p>
        </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
            <form action="{{ route('admin.update') }}" method="get">
                <input type="submit" value="Modificar Datos"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors 
                    cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />
            </form>
            
            <form action="{{ route('admin.create') }}" method="get">
                <input type="submit" value="Crear cuenta Administrador"
                    class="bg-green-600 hover:bg-green-700 transition-colors 
                    cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />
            </form>

            <form action="{{ route('empleado.create') }}" method="get">
                <input type="submit" value="Crear cuenta Empleado"
                    class="bg-orange-500 hover:bg-green-700 transition-colors 
                    cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />
            </form>
        </div>
    </div>
</div>
@endsection
