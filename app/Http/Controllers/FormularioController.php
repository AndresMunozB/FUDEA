<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;
use App\Http\Requests\CreateFormRequest;
use Auth;
use App\User;
class FormularioController extends Controller
{
    public function index()
    {
        $forms = Formulario::orderBy('id','desc')->paginate(10);
        return view('plat.formulario.index')->with(['forms' => $forms]);

    }

    /*
    public function show($postId)
    {
        $post = Post::find($postId);
        if (is_null($post)){
            abort(404);
        }
        return view('posts.show')->with(['post'=> $post]);
    }*/
    //Es lo mismo que lo comentado arriba (error 404) en el caso de no encontrar el objeto
    public function show(Formulario $form)
    {
        
        return view('plat.formulario.show')->with(['form'=> $form]);
    }
    public function create()
    {
        return view('plat.formulario.create');
    }
    public function store(CreateFormRequest $request)   
    {

        $form = Formulario::create($request->all());
        if(Auth::check()){
            return redirect()->route('forms_path');
        }
        else{
            return redirect()->route('raiz');
        }

    }
    public function edit(Formulario $form)
    {
        return view('plat.formulario.edit')->with(['form' => $form]);
    }


    public function update(Formulario $form, CreateFormRequest $request)
    {
        $form->update($request->all());
        if(Auth::user()->isRole('admin') or Auth::user()->isRole('ejecutivo')){
            return redirect()->route('forms_path');
        }
        else{
            return redirect()->route('edit_form_path',['post' => $post->id]);
        }
        
    }
    public function delete(Formulario $form)
    {
        
        $form->delete();
        return redirect()->route('forms_path');
    }
    public function agree(Formulario $form)
    {
        $user = new User;
        $user->name = $form->name;
        $user->email = $form->email;
        $user->rut = $form->rut;
        $user->password = bcrypt('secret');
        $form->user()->associate($user);
    }
}
