<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('admin.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|max:50',
                'email' => 'required|unique:users|email',
                'password' => 'required|confirmed|min:4'
            ]
        );

        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        )->assignRole('admin');

        
        return redirect()->route('admin.index');
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        return view('admin.update');
    }

    public function update(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|max:50',
                'email' => ($request->email != auth()->user()->email) ? 'required|unique:users|email' : 'required|email'
            ]
        );

        DB::table('users')
            ->where('id', auth()->user()->id)
            ->update(
                [
                    'name' => $request->name,
                    'email' => $request->email
                ]
            );

        auth()->attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ]
        );
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
    }
}
