@extends('layouts.app')

@section('titulo')
    MiCake
@endsection

@section('contenido')
<div class="container w-full md:w-4/5 xl:w-full  mx-auto px-2">
    <h2 class="font-black text-center text-3xl mb-10">
        Gestionar recetas
    </h2>
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <table id="example" class="stripe hover text-center"
            style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th>Descripcion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($recetas as $receta)
                <tr>
                    <td>{{ $receta->descripcion }}</td>
                    <td>
                        <button class="bg-green-600 font-bold w-2/3 p-3 text-white rounded-lg" type="submit">
                            Modificar
                        </button>
                    </td>
                    <td>
                        <button class="bg-red-600 font-bold w-2/3 p-3 text-white rounded-lg" type="submit">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection