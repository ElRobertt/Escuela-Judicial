<?php

namespace App\Http\Controllers;

use App\Inicio;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $curso=Inicio::latest()->paginate();
        return view('perfil.index', compact('curso'));
    }
}
