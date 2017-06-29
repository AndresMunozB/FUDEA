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



Auth::routes();
Route::name('home')->get('/home', 'HomeController@index');
Route::name('consulta_path')->get('/consulta','ConsultaController@index');
Route::name('search_consulta_path')->post('/consulta','ConsultaController@search');




//FORMULARIO

Route::name('forms_path')->get('/forms', 'FormularioController@index');
Route::name('create_form_path')->get('/forms/create','FormularioController@create');
Route::name('store_form_path')->post('/forms','FormularioController@store');
Route::name('form_path')->get('/forms/{form}', 'FormularioController@show');
Route::name('edit_form_path')->get('/forms/{form}/edit', 'FormularioController@edit');
Route::name('update_form_path')->put('/forms/{form}', 'FormularioController@update');
Route::name('delete_form_path')->delete('forms/{form}','FormularioController@delete');


//USUARIO
Route::name('users_path')->get('/users','UsuarioController@index');