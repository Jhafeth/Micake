<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('producto.index',['productos'=>$productos]);
    }

    public function create()
    {
        return view('producto.create');
    }

    public function store(Request $request)
    {
        $producto = Producto::create(
            [
                'descripcion' => $request->descripcion,
                'precio' => $request->precio
            ]
            );
            return redirect()->route('producto.index');
    }

    public function show($id)
    {
        return $id;
    }

    public function edit(Producto $producto)
    {
        //
    }

    public function update(Request $request, Producto $producto)
    {
        //
    }

    public function destroy( $id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
