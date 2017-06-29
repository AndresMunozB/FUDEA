<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isRole('empresa')){
            return redirect()->route('consulta_path');
        }
        else if(Auth::user()->isRole('socio')){
            return redirect()->route('edit_form_path')->with(['form' => Auth::user()->formulario ]); 
            //ver despues, si pasando el id funciona igual ya que se recibe en homecontroller un Formulario
        }
        
        return view('plat.home');
    }
}
