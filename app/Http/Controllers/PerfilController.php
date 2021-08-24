<?php

namespace App\Http\Controllers;

use App\Inicio;
use App\Curso;
use App\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('perfil.index', [
            'cursos'=> User::find(auth()->user()->id)->cursoUser,
        ]);
    }

}
