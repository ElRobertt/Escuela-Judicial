@extends('layouts.layout')

@section('title', 'cursos')


@section('content')
<div class="justify-content-center">

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-none navbar-center  " style="padding: 0;" >
        <div class="container-fluid linedown " >
            <div " class=" row mb-0 d-flex justify-content-center" style="background-color: white; padding: 0;">
                <div class="offset-lg-0 col-sm-12 col-md-12 col-lg-6 col-xl-6 ml-0 " style="background-color: white">
                    <img class=" logos2 ocultar"   src="../../images/poderjudlogo.png" alt="" srcset="">
                </div>
                <div class="col-12 col-sm-12 mt-3 col-md-6 col-lg-6 col-xl-6 offset-lg-0" style="max-width: 460px; background-color: white">
                    <img class="rounded   col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 " src="../../images/escuelajulogo.png" alt="" srcset="">
                </div>
            </div>
            <div class="row " style="background-color: white !important"">
                <div class="ocul  col-12 col-sm-12 col-lg-2 col-xl-2 text-center ass " style="background-color: white ; " >
                    <a style="font-size:16px !important" class="btn  nav-link" data-toggle="collapse" href="#multiCollapseExample1" data-target=".multi-collapse" role="button" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"> <svg  xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4c0d0d" class="bi bi-list mt-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg></a>
                </div>
            </div>
            <div class=" row d-flex justify-content-left  " style="background-color: rgba(187, 150, 80); " >
                <div class="col-12 col-sm-12 col-lg-2 col-xl-2 mt-1  multi-collapse " id="multiCollapseExample1" >
                    <div class="ml-3 " id="navbarTogglerDemo01">
                        <ul class="navbar-nav  ">
                          <li id="list" style="margin-left: 100%" class="nav-item col-12 {{ setActive('inicio.*')}}">
                              <a class="nav-link ass "  href="{{ route('inicio.index')}} "> <svg class="mr-1 " style="margin-top: -5px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4c0d0d" class="bi bi-house  mt-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>Inicio</a>
                          </li>
                          <li class="nav-item col-12 {{ setActive('curso.index')}}" style="list-style: none">
                            <a class="nav-link ass" href="{{ route('curso.index')}}"> <svg class="mr-1 " style="margin-top: -5px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4c0d0d" class="bi bi-book mt-2" viewBox="0 0 16 16">
                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                              </svg>Cursos y diplomados</a>
                         </li>
                         <li class="nav-item col-12 ml-5 {{ setActive('perfil.*')}}" style="list-style: none">
                            <a class="nav-link ass" style="" href="{{ route('perfil.index')}} "> <svg class="mr-1 " style="margin-top: -5px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4c0d0d" class="bi bi-person ml-4 mt-2" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                              </svg>Mi Perfil</a>
                         </li>
                         @if (auth()->user()->hasRoles(1))
                         <script>
                            var ml = document.getElementById('list');
                                            ml.style.marginLeft = '0%';
                         </script>

                         <li style="list-style: none" class="nav-item col-12 ml-5 {{ setActive('usuario.*')}}">
                             <a class="nav-link ass"  href="{{ route('usuario.index')}}"><svg class="mr-1 " style="margin-top: -5px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4c0d0d" class="bi bi-people ml-4 mt-2" viewBox="0 0 16 16">
                                 <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                               </svg>Usuarios</a>
                         </li>
                         <li style="list-style: none" class="nav-item col-12 {{ setActive('curso.create')}}">

                            <a class="nav-link ass "  href="{{ route('curso.create')}}" style=""><svg class="mr-1 " style="margin-top: -5px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4c0d0d" class="bi bi-file-earmark-plus ml-5 mt-2" viewBox="0 0 16 16">
                                <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z"/>
                                <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                              </svg>Agregar curso</a>
                        </li>
                        <li class="nav-item col-12 dropdown mt-0" style="list-style: none">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle ass " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{auth()->user()->name}}
                            </a>

                            <div class="dropdown-menu ass " style=" list-style: none; color:white !important" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item ass " href="{{ route('login')}}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   Cerrar sesion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @else
                        <li class="nav-item dropdown col-12 mt-2" style="list-style: none collapse multi-collapse">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle ass" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{auth()->user()->name}}
                            </a>

                            <div class="dropdown-menu ass" style=" list-style: none; " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item ass" href="{{ route('login')}}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                   Cerrar sesion
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endif
                        </ul>
                      </div>
                </div>



             {{-- <div clas


            </div>

            <div class="row" style="background-color: rgba(187, 150, 80); padding:4; border-left: 3px solid #4c0d0d; border-right: 3px solid #4c0d0d;">
                       s="col"<li style="list-style: none" class="nav-item {{ setActive('usuarios.*')}}">
                        <a class="nav-link font133 "  href="{{ route('usuario.index')}}">Agregar curso</a>
                        </li></div>
                    <div class="col">
                        <li style="list-style: none" class="nav-item {{ setActive('usuarios.*')}}">
                            <a class="nav-link font133 "  href="{{ route('usuario.index')}}"></a>
                        </li>
                    </div> --}}

            </div>
        </div>

    </div>
    </nav>
    </div>


    <div class="container " style="padding:1em 2rem; margin-top:280px !important">
            <div class="row">
                    <div class="col-12">
                        <h1 class="text-left txtprimary " style="font-size: 20px">Lista de cursos</h1>
                    </div>
            </div>
                        <div class="row mt-1 " >

                            @switch(Auth()->user()->cargo)
                            @case(1)
                                @forelse ($curso as $cursoItem)
                                    @if ($cursoItem->dirigido_id==1)
                                        <div class="col-12 col-sm-5 col-lg-4 col-xl-3 ">
                                            <div class="card mt-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover ">
                                                @if ($cursoItem->imagen_curso)
                                                    <img class="card-img-top" src="/storage/{{$cursoItem->imagen_curso}}" alt="{{$cursoItem->nombre_curso}}">
                                                @endif

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">Nombre Curso: <br>{{$cursoItem->nombre_curso}}</h5>
                                                        <p class="card-text">Docente: {{$cursoItem->docente}}</p>
                                                        <p class="card-text text-center">Fecha: <br> {{$cursoItem->fecha}}</p>
                                                        <div class="text-center" ">
                                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $cursoItem)}}">Ver mas </a>
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>
                                    @endif
                                    @empty
                                    No hay Cursos Disponibles
                                @endforelse
                                    @break
                            @case(2)
                               @forelse ($curso as $cursoItem)
                                    @if ($cursoItem->dirigido_id==2)
                                        <div class="col-12 col-sm-5 col-lg-4 col-xl-3 ">
                                            <div class="card mt-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover ">
                                                @if ($cursoItem->imagen_curso)
                                                    <img class="card-img-top" src="/storage/{{$cursoItem->imagen_curso}}" alt="{{$cursoItem->nombre_curso}}">
                                                @endif

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">Nombre Curso: <br>{{$cursoItem->nombre_curso}}</h5>
                                                        <p class="card-text">Docente: {{$cursoItem->docente}}</p>
                                                        <p class="card-text text-center">Fecha: <br> {{$cursoItem->fecha}}</p>
                                                        <div class="text-center" ">
                                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $cursoItem)}}">Ver mas </a>
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>
                                    @endif
                                    @empty
                                    No hay Cursos Disponibles
                                @endforelse
                                    @break
                            @case(3)
                                @forelse ($curso as $cursoItem)
                                    @if ($cursoItem->dirigido_id==3)
                                        <div class="col-12 col-sm-5 col-lg-4 col-xl-3 ">
                                            <div class="card mt-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover ">
                                                @if ($cursoItem->imagen_curso)
                                                    <img class="card-img-top" src="/storage/{{$cursoItem->imagen_curso}}" alt="{{$cursoItem->nombre_curso}}">
                                                @endif

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">Nombre Curso: <br>{{$cursoItem->nombre_curso}}</h5>
                                                        <p class="card-text">Docente: {{$cursoItem->docente}}</p>
                                                        <p class="card-text text-center">Fecha: <br> {{$cursoItem->fecha}}</p>
                                                        <div class="text-center" ">
                                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $cursoItem)}}">Ver mas </a>
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>
                                    @endif
                                    @empty
                                    No hay Cursos Disponibles
                                @endforelse
                                @break
                            @case(4)
                                @forelse ($curso as $cursoItem)
                                    @if ($cursoItem->dirigido_id==4)
                                        <div class="col-12 col-sm-5 col-lg-4 col-xl-3 ">
                                            <div class="card mt-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover ">
                                                @if ($cursoItem->imagen_curso)
                                                    <img class="card-img-top" src="/storage/{{$cursoItem->imagen_curso}}" alt="{{$cursoItem->nombre_curso}}">
                                                @endif

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">Nombre Curso: <br>{{$cursoItem->nombre_curso}}</h5>
                                                        <p class="card-text">Docente: {{$cursoItem->docente}}</p>
                                                        <p class="card-text text-center">Fecha: <br> {{$cursoItem->fecha}}</p>
                                                        <div class="text-center" ">
                                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $cursoItem)}}">Ver mas </a>
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>
                                    @endif
                                    @empty
                                    No hay Cursos Disponibles
                                @endforelse
                                @break
                            @case(5)
                                @forelse ($curso as $cursoItem)
                                    @if ($cursoItem->dirigido_id==5)
                                        <div class="col-12 col-sm-5 col-lg-4 col-xl-3 ">
                                            <div class="card mt-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover ">
                                                @if ($cursoItem->imagen_curso)
                                                    <img class="card-img-top" src="/storage/{{$cursoItem->imagen_curso}}" alt="{{$cursoItem->nombre_curso}}">
                                                @endif

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">Nombre Curso: <br>{{$cursoItem->nombre_curso}}</h5>
                                                        <p class="card-text">Docente: {{$cursoItem->docente}}</p>
                                                        <p class="card-text text-center">Fecha: <br> {{$cursoItem->fecha}}</p>
                                                        <div class="text-center" ">
                                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $cursoItem)}}">Ver mas </a>
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>
                                    @endif
                                    @empty
                                    No hay Cursos Disponibles
                                @endforelse
                                @break
                            @case(6)
                                @forelse ($curso as $cursoItem)
                                    @if ($cursoItem->dirigido_id==6)
                                        <div class="col-12 col-sm-5 col-lg-4 col-xl-3 ">
                                            <div class="card mt-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover ">
                                                @if ($cursoItem->imagen_curso)
                                                    <img class="card-img-top" src="/storage/{{$cursoItem->imagen_curso}}" alt="{{$cursoItem->nombre_curso}}">
                                                @endif

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">Nombre Curso: <br>{{$cursoItem->nombre_curso}}</h5>
                                                        <p class="card-text">Docente: {{$cursoItem->docente}}</p>
                                                        <p class="card-text text-center">Fecha: <br> {{$cursoItem->fecha}}</p>
                                                        <div class="text-center" ">
                                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $cursoItem)}}">Ver mas </a>
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>
                                    @endif
                                    @empty
                                    No hay Cursos Disponibles
                                @endforelse
                                @break
                            @case(7)
                                @forelse ($curso as $cursoItem)
                                    @if ($cursoItem->dirigido_id==7)
                                        <div class="col-12 col-sm-5 col-lg-4 col-xl-3 ">
                                            <div class="card mt-5" style="width: 270px; min-height:400px !important; max-height:450px !important; object-fit:cover ">
                                                @if ($cursoItem->imagen_curso)
                                                    <img class="card-img-top" src="/storage/{{$cursoItem->imagen_curso}}" alt="{{$cursoItem->nombre_curso}}">
                                                @endif

                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">Nombre Curso: <br>{{$cursoItem->nombre_curso}}</h5>
                                                        <p class="card-text">Docente: {{$cursoItem->docente}}</p>
                                                        <p class="card-text text-center">Fecha: <br> {{$cursoItem->fecha}}</p>
                                                        <div class="text-center" ">
                                                            <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $cursoItem)}}">Ver mas </a>
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>
                                    @endif
                                    @empty
                                    No hay Cursos Disponibles
                                @endforelse
                                @break

                            @default
                                Default case...
                            @endswitch



                        </div>

                    </div>
                @if (auth()->user()->hasRoles(1))
                <div class="col text-center mt-5">
                    <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.create')}}">Agrega un curso </a>
                </div>
                @endif
    </div>

@endsection

