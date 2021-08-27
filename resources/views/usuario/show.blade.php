@extends('layouts.layout')

@section('title', 'Usuario | '. $usuario->name)


@section('content')

    <div class="container" style="padding:4em 2rem; margin-top:150px !important">
        <div class="row">

            <div class="col-4 offset-1 mt-2">

                <h2 class="mt-3"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="50" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                  </svg>Datos Generales</h2>
                <img class="img-fluid rounded-circle text-center offset-3" src="../../images/IMG_38702.jpg" alt="Card image cap" style="max-height: 50%">
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">

                <div class="text-left">
                    <h3 class="text-center mt-5"> <b> {{$usuario->name}}</b> </h3>
                    <h5 class="text-center"> Juez</h5>
                    <p class="text-secondary ml-4 ">Email: <br> <b>{{$usuario->email}}</b> </p>

                    <p class="text-center" style="margin-top: 25px !important">Fecha Nacimiento: <br> <b>12/3/1993</b> </p>

                </div>
            </div>
            <div class="col-sm-12 mb-3 col-md-2 mb-md-0 mt-5">

                @if (auth()->user()->hasRoles(1))
                        <div class="text-center">
                            <a class="btn btn-primary btn-sm btn-block  colorbtnpss mb-5" href="{{route('usuario.edit', $usuario)}}">Editar </a>
                        </div>

                @endif
                <p style="margin-top: 0px !important"  class="text-center">Grado Estudios: <br> <b> Lic. derecho</b> </p>
                <p class="text-center">Fecha Inscripcion: <b>28/6/2021</b> </p>
                @if ($usuario->role_id==1)
                <p style="margin-top: 60px !important" class="text-secondary text-center">Rol: <b>Administrador</b> </p>
                @else
                <p class="text-secondary text-center">Rol: <b>Alumno</b> </p>
                @endif

            </div>
            <div class="col-sm-12 col-md-2 mt-5">
                @if (auth()->user()->hasRoles(1))
                <div class="text-center">
                    <button class="btn btn-danger btn-sm btn-block delete-btn colorbtnpss " data-toggle="modal" data-target="#modelId">Eliminar</a>
                </div>
            @endif

            </div>


        </div>
        <div class="row">

            <div class="col-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="64" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                  </svg>
                <h2 class="text-left txtprimary">Lista de cursos</h2>
            </div>
            <div class="col-6 mt-0">
                <h3 class="text-left">Pendientes</h3>
                @forelse ($cursos as $cursoItem)
                @if ($cursoItem->pivot->completado==0)
                    <li class="list-group-item list-group-item-action list-group-item-info text-center mb-2"><a  href="{{ route ('curso.show', $cursoItem)}}">{{ $cursoItem->nombre_curso}}</a> </li>
                @endif
                @empty
                <li>No hay cursos para mostrar</li>
                @endforelse
            </div>
            <div class="col-6 mt-0">
                <h3 class="text-left">Acreditados</h3>
                @forelse ($cursos as $cursoItem)
                @if ($cursoItem->pivot->completado==1)
                    <li class="list-group-item list-group-item-action list-group-item-success text-center mb-2"><a style="color: #aaa !important"  href="{{ route ('curso.show', $cursoItem)}}">{{ $cursoItem->nombre_curso}}</a> </li>
                @endif
                @empty
                <li>No hay cursos para mostrar</li>
                @endforelse
            </div>



        </div>

    </div>








    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content " style="background-color: #fff">
                <div class="modal-header text-center">
                    <h5 class="modal-title text-center " style="te"  >¿Seguro que desea eliminar el usuario?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body text-center ">
                    <div class="col " >
                        <form id="eliminar" method="POST" action="{{route('usuario.destroy', $usuario)}}">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-primary col-sm-12 col-md-8 col-lg-8 col-xl-8 sc mb-2" >Eliminar</button>
                        </form>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-secondary col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-2 " data-dismiss="modal">Cancelar</button>

                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

@endsection
