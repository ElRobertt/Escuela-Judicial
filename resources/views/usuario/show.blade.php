@extends('layouts.layout')

@section('title', 'Usuario | '. $usuario->name)


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="text-center ">{{$usuario->name}}</h1>
                <img class="card-img-top" src="../../images/e1.jpg" alt="Card image cap">
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">

                <div class="text-left">
                    <p class="text-secondary mt-5">Email: {{$usuario->email}}</p>
                    <p class="text-secondary">Rol: {{$usuario->role_id}}</p>
                </div>
            </div>
        </div>
    </div>
    @if (auth()->user()->hasRoles(1))
        <div class="container mt-5 text-center">
            <div class="row m-0 justify-content-center">
                <div class="col-sm-12 mb-3 col-md-8 mb-md-0 ">
                    <div class="text-center">
                        <a class="btn btn-primary btn-lg btn-block mb-5" href="{{route('usuario.edit', $usuario)}}">Editar </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 ">
                    <div class="text-center">
                        <button class="btn btn-danger btn-lg btn-block delete-btn" data-toggle="modal" data-target="#modelId">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    @endif





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
