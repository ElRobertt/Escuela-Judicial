@extends('layouts.layout' )
@section('title', 'Usuario | ' )



@section('content')

    <div class="container " style="padding:4em 2rem; margin-top:200px !important">

        <div class="row">

            <div class="col-12">
                <h2 class="text-center txtprimary">Lista de cursosss</h2>
            </div>
            <div class="col-6 mt-3">
                <h3 class="text-center">Pendientes</h3>
                @forelse ($cursos as $cursoItem)
                @if ($cursoItem->pivot->completado==0)
                    <li class="list-group-item list-group-item-info text-center mb-2"><a  href="{{ route ('curso.show', $cursoItem)}}">{{ $cursoItem->nombre_curso}}</a> </li>
                @endif
                @empty
                <li>No hay cursos para mostrar</li>
                @endforelse
            </div>
            <div class="col-6 mt-3">
                <h3 class="text-center">Acreditados</h3>
                @forelse ($cursos as $cursoItem)
                @if ($cursoItem->pivot->completado==1)
                    <li class="list-group-item-success list-group-item-info text-center mb-2"><a  href="{{ route ('curso.show', $cursoItem)}}">{{ $cursoItem->nombre_curso}}</a> </li>
                @endif
                @empty
                <li>No hay cursos para mostrar</li>
                @endforelse
            </div>



        </div>
    </div>





@endsection
