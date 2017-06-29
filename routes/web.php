<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('raiz')->get('/', function () {
    if(Auth::check()){
        return redirect()->route('home');
    }
    else{
        return view('welcome');
    }
});


Route::name('home')->get('/home', 'HomeController@index');
Route::name('desarrolladores')->get('/desarrolladores',function(){
    return view('desarrolladores');
});



//CONSULTA SOCIO (EMPRESA)
Route::name('consulta_path')->get('/consulta','ConsultaController@index');
Route::name('search_consulta_path')->post('/consulta','ConsultaController@search');




//FORMULARIO

Route::name('forms_path')->get('/forms', 'FormularioController@index');
Route::name('create_form_path')->get('/forms/create','FormularioController@create');
Route::name('store_form_path')->post('/forms','FormularioController@store');
Route::name('edit_form_path')->get('/forms/{form}/edit', 'FormularioController@edit');
Route::name('update_form_path')->put('/forms/{form}', 'FormularioController@update');
Route::name('delete_form_path')->delete('/forms/{form}','FormularioController@delete');
Route::name('agree_form_path')->get('/forms/{form}/agree', 'FormularioController@agree');



//USUARIO
Route::name('users_path')->get('/users','UsuarioController@index');
Route::name('edit_user_path')->get('/users/{user}/edit','UsuarioController@edit');
Route::name('update_user_path')->put('/users/{user}', 'UsuarioController@update');
Route::name('delete_user_path')->delete('/users/{user}','UsuarioController@delete');

Route::name('register')->get('/register','UsuarioController@register')
Auth::routes();