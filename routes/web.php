<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/inicio', function () {

    return view('inicio');
})->name('inicio');
// Route::view('/', 'inicio')->name('inicio');
Route::get('cursos', function () {
    return view('cursos');
})->name('cursos');
Route::view('/perfil', 'perfil')->name('perfil');
Route::view('/admin', 'admin')->name('admin');
Route::view('/login', 'login')->name('login');
Route::view('/cursos.create', 'create')->name('create');
Route::view('/usuario', 'usuario')->name('usuario');



// Route::get('/cursos', 'CursoController@index')->name('curso.index');
// route::get('cursos/crear', 'CursoController@create')->name('curso.create');
// route::get('cursos/{curso}/editar', 'CursoController@edit')->name('curso.edit');
// route::patch('cursos/{curso}', 'CursoController@update')->name('curso.update');
// Route::get('/cursos/{id}', 'CursoController@show')->name('curso.show');
// Route::post('/cursos', 'CursoController@store')->name('cursos.store');
// Route::delete('cursos/{curso}', 'CursoController@destroy')->name('curso.destroy');

Route::resource('curso', 'CursoController');
Route::resource('inicio', 'InicioController');
Route::resource('perfil', 'PerfilController');
Route::resource('usuario', 'UsuarioController');

Route::post('/cursos', 'CursoController@inscribirse')->name('curso.inscribirse');

Route::post('cursoss/{user}', 'CursoController@actualizar')->name('curso.actualizar');



// Route::get('/cursos/{id}', function($id = 10) {
//     return $id;
// });

// Route::get('/inicio', 'InicioController@index')->name('inicio.index');
// Route::post('cursos', 'MessagesController@store')->name('messages.store');
Auth::routes();


