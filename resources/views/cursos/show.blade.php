
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
                    <button class="btn btn-primary btn-sm btn-block colorbtnp mb-1" data-toggle="modal" data-target="#modelIds">inscribirse</button>
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

                                <th class="text-center">Calificacion</th>
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
                                <td class="text-center">9</td>
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
      <div class="modal-content" style="">
        <div class="modal-headerss text-center" style="background-color: rgba(187, 150, 80)">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#4c0d0d" class="bi bi-question-lg mt-2 mb-2" viewBox="0 0 16 16">
                <path d="M3 4.075a.423.423 0 0 0 .43.44H4.9c.247 0 .442-.2.475-.445.159-1.17.962-2.022 2.393-2.022 1.222 0 2.342.611 2.342 2.082 0 1.132-.668 1.652-1.72 2.444-1.2.872-2.15 1.89-2.082 3.542l.005.386c.003.244.202.44.446.44h1.445c.247 0 .446-.2.446-.446v-.188c0-1.278.487-1.652 1.8-2.647 1.086-.826 2.217-1.743 2.217-3.667C12.667 1.301 10.393 0 7.903 0 5.645 0 3.17 1.053 3.001 4.075zm2.776 10.273c0 .95.758 1.652 1.8 1.652 1.085 0 1.832-.702 1.832-1.652 0-.985-.747-1.675-1.833-1.675-1.04 0-1.799.69-1.799 1.675z"/>
              </svg>

        </div>
        <div class="modal-body text-center">
            <h4 style="color:#aaa; font-family:montserrat">¿Estas seguro que te deseas inscribir al curso?</h4>
            <h5 style="color:#aaa; font-family:montserrat" class="text-center ">{{$curso->nombre_curso}}</h5>
            <div class="form-check mt-5">
                <input class="form-check-input" type="checkbox" value="true" id="defaultCheck1" checked disabled>
                <label class="form-check-label" for="defaultCheck1">
                  Acepto cumplir con los requisitos establecidos
                </label>
              </div>
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
                    <button class="btn btn-primary btn-lg btn-block colorbtnp mb-1" data-toggle="modal" data-target="#modelIda">inscribirse</button>

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
        <div class="modal-headerss text-center " style="background-color: rgba(187, 150, 80)">
          <h5 class="modal-title text-center" id="exampleModalLongTitle">           <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#4c0d0d" class="bi bi-check2-circle text-center" viewBox="0 0 16 16">
            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
          </svg>
          </h5>
        </div>
        <div class="modal-body text-center">
            <h1 style="color:#aaa; font-family:montserrat">Registro exitoso</h1>
            <h5 style="color:#aaa; font-family:montserrat">Los detalles del curso fueron enviados correctamente a tu email.</h5>

            <a href="{{ route('curso.index')}}">Seguir Explorando <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
              </svg></a>

        </div>
        <div class="modal-footer">
            <div class="col-12">
                <button type="button" class="btn  btn-primary btn-block colorbtnp" data-dismiss="modal">Continuar</button>
            </div>
        </div>
      </div>
    </div>
  </div>


@endsection

<!-- Button trigger modal -->


  <!-- Modal -->

