<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return view('producto.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Producto $medida)
    {
        //
    }

    public function edit(Producto $medida)
    {
        //
    }

    public function update(Request $request, Producto $medida)
    {
        //
    }

    public function destroy(Producto $medida)
    {
        //
    }
}
