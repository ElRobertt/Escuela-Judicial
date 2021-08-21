<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Inicio;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');


    }
    public function index()
    {
        $inicio=Inicio::get();
        return view('inicio.index', compact('inicio'));
    }
}
