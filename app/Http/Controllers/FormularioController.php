<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;

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
    public function store(Request $request)   
    {
        /* Es lo mismo que el create
        $post = new Post;
        $post->title = $request->get('title');
        $post->description = $request->get('description');
        $post->url = $request->get('url');
        $post->save();
        */
        $form = Formulario::create($request->only('rut','name'));
        //dd($request->all()); 
        return redirect()->route('forms_path');
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
