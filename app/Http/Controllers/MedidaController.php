<?php

namespace App\Http\Controllers;

use App\Models\Medida;
use Illuminate\Http\Request;

class MedidaController extends Controller
{
    public function index()
    {
        $medidas = Medida::all();
        return view('medida.index', ['medidas' => $medidas]);
    }

    public function create()
    {
        return view('medida.create');
    }

    public function store(Request $request)
    {
        Medida::create(['name' => $request->name]);
    }

    public function show(Medida $medida)
    {
        //
    }

    public function edit(Medida $medida)
    {
        //
    }

    public function update(Request $request, Medida $medida)
    {
        //
    }

    public function destroy(Medida $medida)
    {
        //
    }
}
