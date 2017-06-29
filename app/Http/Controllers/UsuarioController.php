<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios =  User::orderBy('created_at','desc')->simplePaginate(10);
        return view('plat.usuario.index')->with(['usuarios'=> $usuarios]);
    }
    public function edit(User $user)
    {   
        return view('plat.usuario.edit')->with(['user' => $user]);
    }
    public function update(User $user,Request $request)
    {
        $user->update(request->all());
        return redirect()->route('users_path');
    }
}
