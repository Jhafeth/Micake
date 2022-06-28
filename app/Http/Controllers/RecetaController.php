<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index()
    {
        $recetas = Receta::all();
        return view('receta.index', ['recetas' => $recetas]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Receta $medida)
    {
        //
    }

    public function edit(Receta $medida)
    {
        //
    }

    public function update(Request $request, Receta $medida)
    {
        //
    }

    public function destroy(Receta $medida)
    {
        //
    }
}
