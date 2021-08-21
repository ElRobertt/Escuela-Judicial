@extends('layouts.layout')

@section('title', 'Curso | '. $curso->nombre_curso)


@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-4 ">
                <h1 class="text-center ">{{$curso->nombre_curso}}</h1>
                @if ($curso->imagen_curso)
                    <img class="card-img-top" src="/storage/{{$curso->imagen_curso}}" alt="{{$curso->nombre_curso}}">
                @endif
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">

                <div class="text-left">
                    <p class="text-secondary mt-5">Nombre docente: {{$curso->docente}}</p>
                    <p class="text-secondary">Dirigido a: {{$curso->dirigido_id}}</p>
                    <p class="text-secondary">Horas del curso: {{$curso->horas_curso}}</p>
                    <p class="text-secondary">Materia: {{$curso->materia}}</p>
                    <p class="text-secondary">Vigencia: {{$curso->vigencia}}</p>
                    <p class="text-secondary">Link Videoconferencia: {{$curso->videoconferencia}}</p>
                    <p class="text-secondary">Drive: {{$curso->drive}}</p>
                </div>
            </div>
        </div>
    </div>
    @if (auth()->user()->hasRoles(1))
        <div class="container mt-5 text-center">
            <div class="row m-0 justify-content-center">
                <div class="col-sm-12 col-md-4 ">
                    <div class="text-center">
                        <form method="POST" action="{{ route('curso.inscribirse') }} ">
                            @csrf
                            <input id="curso_id" type="hidden" name="curso_id" value="{{$curso->id}}" required autocomplete="name">
                            <input id="user_id" type="hidden" name="user_id" value="{{auth()->user()->id}}" required autocomplete="name">
                        </form>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block colorbtnp mb-5" data-toggle="modal" data-target="#modelIds">inscribirse</button>

                </div>
                <div class="col-sm-12 mb-3 col-md-4 mb-md-0 ">
                    <div class="text-center">
                        <a class="btn btn-primary btn-lg btn-block mb-5" style="background-color: #aaa !important; border-color:#aaa !important" href="{{route('curso.edit', $curso)}}">Editar </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 ">
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
                    <h5 class="modal-title text-center " style="te"  >¿Seguro que desea eliminar el curso?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body text-center ">
                    <div class="col mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#4c0d0d" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                          </svg>
                    </div>
                    <div class="col " >
                        <form id="eliminar" method="POST" action="{{route('curso.destroy', $curso)}}">
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

   <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="modelIds" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLongTitle">Confirmacion de registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <h3 style="font-size:20px; color:#aaa; font-family:montserrat">Estas seguro que te deseas inscribir al curso?</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4c0d0d" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
            </svg>
        </div>
        <div class="modal-footer">
            <div class="col-12">
                <button type="button" class="btn btn-large btn-block colorbtnp">Inscribirme</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn  btn-secondary btn-block colorbtnps" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection

<!-- Button trigger modal -->


  <!-- Modal -->

