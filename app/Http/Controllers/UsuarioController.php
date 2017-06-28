<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios =  User::orderBy('created_at','desc')->simplePaginate(2);
        return view('plat.usuario.index')->with(['usuarios'=> $usuarios]);
    }
}
