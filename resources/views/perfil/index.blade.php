@extends('layouts.layout')




@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center txtprimary">Lista de cursos</h2>
            </div>
            <div class="col-6 mt-3">
                <h3 class="text-center">Pendientes</h3>
                @forelse ($curso as $cursoItem)
                <li class="list-group-item list-group-item-info text-center mb-2"><a  href="{{ route ('curso.show', $cursoItem)}}">{{ $cursoItem->nombre_curso}}</a> </li>
                @empty
                <li>No hay cursos para mostrar</li>
                @endforelse
            </div>
            <div class="col-6 mt-3">
                <h3 class="text-center">Completados</h3>
                <div class="alert alert-info text-center  list-group-item list-group-item-success " role="alert">
                    <a class="txt-2" href="">alertaa</a>
                </div>
            </div>



        </div>
    </div>





@endsection
