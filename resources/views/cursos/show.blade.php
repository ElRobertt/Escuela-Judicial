
@extends('layouts.layout')

@section('title', 'Curso | '. $curso->nombre_curso)


@section('content')

    <div class="container small " style="padding:4em 2rem">
        <div class="row mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
        </div>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 ">
                <h2 class="text-center "> {{$curso->nombre_curso}}</h2>
                  @if ($curso->imagen_curso)
            <img class="card-img-top text-center" src="/storage/{{$curso->imagen_curso}}" alt="{{$curso->nombre_curso}}">
        @endif
                </div>

            <div class="col-sm-12 col-md-5 col-lg-6 col-xl-4 mt-lg-5">


        <p class="text-secondary mt-5 text-center">Nombre docente: {{$curso->docente}}</p>
        <p class="text-secondary text-center ">Dirigido a: {{$curso->dirigido_id}}</p>
        <p class="text-secondary text-center">Horas del curso: {{$curso->horas_curso}}</p>
        <p class="text-secondary text-center">Materia: {{$curso->materia}}</p>
        <p class="text-secondary text-center " style="margin-bottom: 40px">Asistentes: {{$curso->vigencia}}</p>

                <div class=" text-center col-xl-12">
                    <script>
                        if ( suscr == 0) {
                            document.getElementById('btn-susc').disabled=true;

                        } else {
                            document.getElementById('btn-susc').disabled=false;

                        }
                    </script>
                    <button id="btn-susc" class="btn btn-primary btn-sm btn-block colorbtnp mb-1" data-toggle="modal" data-target="#modelIds">inscribirse</button>
                </div>

        </div>
    </div>


         {{-- {{$users}} --}}
         <div class="container">
            @if (auth()->user()->hasRoles(1))
            <div class="row mt-5">
                <h1>Usuarios</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12 col-xl-12 ">
                    <table class="table mt-1">
                        <thead>
                            <tr>
                                <th class="d-none d-lg-block">ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th class="text-center d-none d-lg-block">Completado</th>
                                <th class="text-center">Acreditacion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="d-none d-lg-block">{{$user->id}}</td>
                                <td><a href="{{ route('usuario.show', $user)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>

                                <td class="d-none d-lg-block">
                                    <div class="text-center">
                                        @if ($user->pivot->completado==1)
                                            <a>Si</a>
                                        @else
                                            <a>No</a>
                                        @endif

                                    </div>
                                </td>
                                <td>
                                    @if ($user->pivot->completado == 1)
                                    <div class="text-center">
                                        <button class="btn btn-primary btn-sm colorbtnp2" disabled>Acreditado</button>
                                        <script>                            document.getElementById('btn-susc').disabled=true;
                                        </script>
                                    </div>
                                    @else

                                    <form method="POST" action="{{ route('curso.actualizar', $user->pivot->id)}}">
                                        @csrf
                                        <div class="text-center">
                                            <input id="completado" type="hidden" name="completado" value="1" required autocomplete="name">
                                            <button class="btn btn-primary btn-sm colorbtnp mb-1" >Acreditar</button>
                                        </div>
                                    </form>


                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container mt-0 text-center">
                    <div class="row m-0 justify-content-center">
                        @if (auth()->user()->hasRoles(1))
                        <div class="col-sm-12 mb-3 col-md-3 mb-md-0 ">
                            <div class="text-center">
                                <a class="btn btn-primary btn-sm btn-block mb-1 colorbtnpss" href="{{route('curso.edit', $curso)}}">Editar </a>
                            </div>
                        </div>
                        {{-- <div class="col-sm-12 col-md-3 " >
                            <div class="text-center">
                                <button class="btn btn-danger btn-sm colorbtnpss" data-toggle="modal" data-target="#modelId">Eliminar</a>

                                </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>

    @endif
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
            <h4 class="text-center ">{{$curso->nombre_curso}}</h4>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4c0d0d" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
            </svg>
        </div>
        <div class="modal-footer">
            <div class="col-12">
                <form method="POST" action="{{ route('curso.inscribirse') }} ">
                    @csrf
                    <input id="user_id" type="hidden" name="email" value="{{auth()->user()->email}}" required autocomplete="name">
                    <input id="user_id" type="hidden" name="name" value="{{auth()->user()->name}}" required autocomplete="name">
                    <input id="curso_id" type="hidden" name="nombre_curso" value="{{$curso->nombre_curso}}" required autocomplete="name">
                    <input id="curso_id" type="hidden" name="fecha" value="{{$curso->fecha}}" required autocomplete="name">
                    <input id="curso_id" type="hidden" name="drive" value="{{$curso->drive}}" required autocomplete="name">
                    <input id="curso_id" type="hidden" name="videoconferencia" value="{{$curso->videoconferencia}}" required autocomplete="name">
                    <input id="curso_id" type="hidden" name="curso_id" value="{{$curso->id}}" required autocomplete="name">
                    <input id="user_id" type="hidden" name="user_id" value="{{auth()->user()->id}}" required autocomplete="name">
                    <input id="completado" type="hidden" name="completado" value="0" required autocomplete="name">
                    <script>
                        var suscr = 1;
                    </script>
                    <button class="btn btn-primary btn-lg btn-block colorbtnp mb-1" data-toggle="modal" data-target="#modelIds">inscribirse</button>

                </form>

            </div>
            <div class="col-12">
                <button type="button" class="btn  btn-secondary btn-block colorbtnps" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modelIda" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLongTitle">Confirmacion de acreditacion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <h3 style="font-size:20px; color:#aaa; font-family:montserrat">Estas seguro que deseas acreditar a este usuario?</h3>

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4c0d0d" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
            </svg>
        </div>
        <div class="modal-footer">
            <div class="col-12">





            </div>
            <div class="col-12">
                <button type="button" class="btn  btn-secondary btn-block colorbtnps" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection

<!-- Button trigger modal -->


  <!-- Modal -->

