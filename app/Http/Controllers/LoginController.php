<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('mensaje', 'Datos incorrectos');
        }

        if (auth()->user()->type == 0) {
            return redirect()->route('admin.index');
        } else if (auth()->user()->type == 1){
            return redirect()->route('cliente.index');
        } else{
            return redirect()->route('empleado.index');
        }
    }
}
