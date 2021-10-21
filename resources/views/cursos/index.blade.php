@extends('layouts.layout')

@section('title', 'cursos')

@section('content')

    <div class="container margins" style="padding:1em 2rem; margin-top:180px">
            <div class="row">
                    <div class="col-12">
                        <h1 class="text-left txtprimary mt-5" >Lista de cursos</h1>
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

