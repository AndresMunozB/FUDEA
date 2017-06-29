<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;
use App\Http\Requests\CreateFormRequest;
use Auth;
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
    public function edit(Post $post)
    {
        return view('plat.formulario.edit')->with(['form' => $form]);
    }


    public function update(Post $post, UpdatePostRequest $request)
    {
        $form->update($request->only('title', 'description', 'url'));
        return redirect()->route('post_path',['post' => $post->id]);
    }
    public function delete(Post $post)
    {
        
        $post->delete();
        return redirect()->route('posts_path');
    }
}
