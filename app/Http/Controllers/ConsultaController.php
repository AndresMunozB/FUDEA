<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('plat.empresa.consulta')->with(['consulta' => '']);
    }
    public function search(Request $request)        
    {
        $user =User::where('rut',$request->rut)->first();
        if(is_null($user) or !($user->isRole('socio')) ){
            return view('plat.empresa.consulta')->with(['consulta' => 'false', 'rut' => $request->rut]);
        }
        else{
            return view('plat.empresa.consulta')->with(['consulta' => 'true','rut' => $request->rut]);
        }
        
    }

}