<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([

            'fecha'=> 'required',
            'docente'=> 'required',
            'nombre'=> 'required',
            'dirigido_id'=> 'required',
            'horas'=> 'required',
            'fecha_limite'=> 'required',
            'materia'=> 'required',
            'vigencia'=> 'required',
            'videoconferencia'=> 'required',
            'drive'=> 'required'

        ]);
    }
}
