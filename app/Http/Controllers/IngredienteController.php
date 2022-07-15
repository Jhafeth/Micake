<?php

namespace App\Http\Controllers;

use App\Models\Medida;
use App\Models\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all();
        return view('ingrediente.index', ['ingredientes' => $ingredientes]);
    }

    public function create()
    {
        $medidas = Medida::all();
        return view('ingrediente.create', ['medidas' => $medidas]);
    }

    public function store(Request $request)
    {

        Ingrediente::create([
            'name' => $request->name,
            'stock' => $request->stock,
            'medida_id' => $request->medida
        ]);

        $ingredientes = Ingrediente::all();
        return view('ingrediente.index', ['ingredientes' => $ingredientes]);
    }

    public function show(Ingrediente $medida)
    {
        //
    }

    public function edit($id)
    {
        $ingrediente = Ingrediente::find($id);
        $medidas = Medida::all();
        return view('ingrediente.update', ['ingrediente' => $ingrediente, 'medidas' => $medidas]);
    }

    public function update(Request $request, Ingrediente $medida)
    {
        //
    }

    public function destroy(Ingrediente $medida)
    {
        //
    }
}
