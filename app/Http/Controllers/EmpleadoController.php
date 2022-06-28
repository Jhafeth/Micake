<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmpleadoController extends Controller
{
    public function index()
    {
        return view('empleado.index');
    }

    public function create()
    {
        return view('empleado.create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|max:50',
                'email' => 'required|unique:users|email',
                'password' => 'required|confirmed|min:4',
                'ci' => 'required|unique:personas'
            ]
        );

        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        )->assignRole('empleado');

        $persona = Persona::create(
            [
                'ci' => $request->ci,
                'direccion' => $request->direccion,
                'telefono' => $request->telefono,
                'user_id' => $user->id
            ]
        );

        return redirect()->route('admin.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
