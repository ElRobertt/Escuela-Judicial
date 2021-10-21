@extends('layouts.layout' )
@section('title', 'Usuario | '. auth()->user()->name  )



@section('content')
    <div class="container margins" style="background-color: #4c0d0d; margin-top:150px ; visibility: hidden;
    ">
        <div class="row" style="">
            <div class="col-12">
                <ul>
                    <li>hola</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mt-5" style="border: 3px solid #4c0d0d; border-radius:10px" >
        <div class="row " >
            <div class="col-12 col-sm-12 col-lg-4 col-xl-4  " style="">
                <h2 class="mt-1" style="color: #4c0d0d">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/> <br>
                  </svg>Datos Generales</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-4 col-xl-4 ">
                <img class="img-fluid rounded-circle text-center offset-0" src="/storage/{{auth()->user()->imagen_perfil}}" alt="Card image cap" style="max-height: 300px">
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-6 col-xl-5 ">
                <table>
                    <thead>
                        <tr>
                            <h3 class="text-center" style="color: #4c0d0d">
                                <b> {{auth()->user()->name}} <br>
                                </b>
                            </h3>
                        </tr>
                    </thead>

                    <tr>
                        <p class="text-center text-secondary">
                            <b>
                                @switch(auth()->user()->cargo)
                                    @case(1)
                                        Magistrado
                                        @break
                                    @case(2)
                                        Juez
                                        @break
                                    @case(3)
                                        Secretario
                                        @break
                                    @case(4)
                                        Proyectista
                                        @break
                                    @case(5)
                                        Notificador / Actuario
                                        @break
                                    @case(6)
                                        Administrativo
                                        @break
                                    @case(7)
                                        Personal Externo
                                        @break

                                    @default

                                @endswitch

                            </b>
                        </p>
                    </tr>
                    <td>
                        <h6 class="text-secondary ml-0 text-left ">Email: <br>
                            <b>{{auth()->user()->email}}</b>
                        </h6>
                    </td>
                    <td>
                        <h6 class=" text-secondary ml-5 text-right" style="margin-top: 0px !important">Edad: <br> <b> {{auth()->user()->edad}} años</b>
                        </h6>
                    </td>

                    <tr>
                        <td>
                            <h6 class="text-secondary text-left">Numero Telefonico: <br> <b>  {{auth()->user()->numero}}</b> </h6>
                        </td>
                        <td>
                            <p class="text-right text-secondary">Institucion de Procedencia: <br> <b> {{auth()->user()->institucion}}</b> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if (auth()->user()->role_id==1)
                            <h6 style="margin-top: 0px !important" class="text-secondary text-left">Tipo de cuenta: <b>Administrador</b> </h6>
                            @else
                            <h6 class="text-secondary text-left">Tipo de cuenta: <b>Alumno</b> </h6>
                            @endif

                        </td>
                    </tr>
                </table>
            </div>
            @if (auth()->user()->hasRoles(1))
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-6 col-xl-6 ">
               <div class="text-center">
                    <a class="btn btn-primary btn-sm btn-block  colorbtnpss mb-0">Editar </a>
               </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-6 col-xl-6">
                    <div class="text-center">
                        <button class="btn btn-danger btn-sm btn-block delete-btn colorbtnpss " data-toggle="modal" data-target="#modelId">Eliminar cuenta</button>
                    </div>

                </div>
            </div>
            @endif
         </div>
            </div>

            <div class="container mt-1" >
                <div class="row "style="border-bottom: #4c0d0d solid 3px" >
                    <div class="col-6" >
                        <h3 class="mt-5" style="color: #4c0d0d">Documentación Anexada</h3>

                    </div>
                </div>
                <section class="row align-items-center">
                  <div class="col-12 col-lg-6">
                    <ul class="ulli nav nav-tabs text-left" >
                        <li class="active ml-sm-0 ml-lg-3  text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check1" disabled checked>
                                <a id="CP1" href="#tab-1" class="form-check-label" for="defaultCheck1">
                                    COPIA CERTIFICADA ACTA NACIMIENTO
                                </a>
                            </div>
                        </li>
                        <li class=" ml-sm-0 ml-lg-3 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check4" disabled checked>
                                <a id="CP4" href="#tab-4" class="form-check-label" for="defaultCheck1">
                                    CARTA EXPOSICION MOTIVOS
                                </a>
                            </div>
                        </li>
                        <li class=" ml-sm-0 ml-lg-3 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check2" disabled checked>
                                <a id="CP2" href="#tab-2" class="form-check-label" for="defaultCheck1">
                                    COPIA CERTIFICADA CEDULA/TITULO
                                </a>
                            </div>
                        </li>

                        <li class=" ml-sm-0 ml-lg-3 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check3" disabled checked>
                                <a id="CP3" href="#tab-3" class="form-check-label" for="defaultCheck1">
                                    COPIA CREDENCIAL DEL ELECTOR
                                </a>
                            </div>
                        </li>
                        <li class="ml-sm-0 ml-lg-3 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check5" disabled checked>
                                <a id="CP5" href="#tab-5" class="form-check-label" for="defaultCheck1">
                                    FOTOGRAFIAS TAMAÑO CREDENCIAL BLANCO Y NEGRO
                                </a>
                            </div>
                        </li>

                        <li class=" ml-sm-0 ml-lg-3 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check6" disabled checked>
                                <a id="CP6" href="#tab-6" class="form-check-label" for="defaultCheck1">
                                    COPIA SIMPLE CURP                                 </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-lg-6 tab-content mt-5" style="background-color: white; border-radius:4px ">
                    <div id="tab-12" class="tab-pane"></div>


                    <div class="tab-content ">
                        <div id="tab-1" class="tab-pane active text-center">
                            <span class="col-md-10">
                                <div class="form-group row">
                                    <div class="col-12 col-sm-12 col-lg-11">
                                        <h6> <b> COPIA CERTIFICADA ACTA NACIMIENTO</h6>
                                            <embed src="/storage/{{auth()->user()->acta_nac}}#toolbar=1&navpanes=1&scrollbar=0&zoom=0" type="application/pdf" width="100%" height="450px" />

                                        {{-- <img src="/storage/{{auth()->user()->acta_nac}}" class="img-fluid img-thumbnail mt-1 text-center" style="height: 450px;width: 350px" id="imagenPrevisualizacion2223"> --}}


                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div id="tabs-22" class="tab-content">
                        <div id="tab-2" class="tab-pane text-center">
                            <span class="glyphicon glyphicon-leaf glyphicon--home--feature two columns text-center"></span>
                            <span class=" col-md-10">
                                <div class="form-group row" id="1">
                                    <div class="col-12 col-sm-12 col-lg-11">
                                        <h6  class="text-center"> <b> COPIA CERTIFICADA CEDULA/TITULO <br> </h6>
                                            <embed src="/storage/{{auth()->user()->cedula}}#toolbar=1&navpanes=1&scrollbar=0&zoom=0" type="application/pdf" width="100%" height="450px" />
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="tab-3" class="tab-pane text-center">
                            <span class="glyphicon glyphicon-fire glyphicon--home--feature two columns text-center"></span>
                            <span class="col-md-10">
                                <div class="form-group row " id="2">
                                    <div class="col-12 col-md-11">
                                        <h6  class="text-center"> <b> COPIA CREDENCIAL DEL ELECTOR <br></h6>
                                            <embed src="/storage/{{auth()->user()->credencial}}#toolbar=1&navpanes=1&scrollbar=0&zoom=0" type="application/pdf" width="100%" height="450px" />
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="tab-4" class="tab-pane text-center">
                            <span class="glyphicon glyphicon-tint glyphicon--home--feature two columns text-center"></span>
                            <span class="col-md-10">
                                <div class="form-group row">
                                    <div class="col-12 col-md-11">
                                        <h6  class="text-center"> <b> CARTA EXPOSICION MOTIVOS <br> </h6>

                                            <embed src="/storage/{{auth()->user()->carta_expo}}#toolbar=1&navpanes=1&scrollbar=0&zoom=0" type="application/pdf" width="100%" height="450px" />
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="tab-content" style="border-bottom: #4c0d0d solid 3px">
                        <div id="tab-5" class="tab-pane text-center">
                            <span class="glyphicon glyphicon-leaf glyphicon--home--feature two columns text-center"></span>
                            <span class="col-md-10">
                                <div class="form-group row">
                                    <div class="col-12 col-md-11">
                                        <h6  class="text-center"> <b> FOTOGRAFIA TAMAÑO CREDENCIAL EN BLANCO Y NEGRO <br>
                                            <embed src="/storage/{{auth()->user()->fotografia}}#toolbar=1&navpanes=1&scrollbar=0&zoom=0" type="application/pdf" width="100%" height="450px" />
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-6" class="tab-pane text-center">
                            <span class="glyphicon glyphicon-fire glyphicon--home--feature two columns text-center"></span>
                            <span class="col-md-10">
                                <div class="form-group row">
                                    <div class="col-12 col-md-11">
                                        <h6  class="text-center"> <b> COPIA SIMPLE CURP <br>
                                            <embed src="/storage/{{auth()->user()->curp}}#toolbar=1&navpanes=1&scrollbar=0&zoom=0" type="application/pdf" width="100%" height="450px" />
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>

            </section>
        </div>





    <script>
        window.addEventListener("load", function() {
    // store tabs variable
    var theTabs = document.querySelectorAll("ul.nav-tabs > li");

    function theTabClicks(tabClickEvent) {
        var clickedTab = tabClickEvent.currentTarget;
        var tabParent = tabClickEvent.currentTarget.parentNode.parentNode.parentNode;
        var theTabs = tabParent.querySelectorAll("ul.nav-tabs > li");
        for (var i = 0; i < theTabs.length; i++) {
            theTabs[i].classList.remove("active");
        }

        clickedTab.classList.add("active");
        tabClickEvent.preventDefault();
        var contentPanes = tabParent.querySelectorAll(".tab-pane");
        for (i = 0; i < contentPanes.length; i++) {
            contentPanes[i].classList.remove("active");
        }
        var anchorReference = tabClickEvent.target;
        var activePaneId = anchorReference.getAttribute("href");
        var activePane = tabParent.querySelector(activePaneId);
        activePane.classList.add("active");
    }
    for (i = 0; i < theTabs.length; i++) {
        theTabs[i].addEventListener("click", theTabClicks)
    }
});
    </script>
        <div class="container">
        <div class="row">
            <h2 class="mt-3" style="color: #4c0d0d">Lista de cursos</h2>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-6 ">
                <h3 class="text-left" style="border-bottom:3px solid #4c0d0d">Pendientes</h3>
                @forelse ($cursos as $cursoItem)
                @if ($cursoItem->pivot->completado==0)
                    <li class="list-group-item list-group-item-action list-group-item-info text-center mb-2"><a  href="{{ route ('curso.show', $cursoItem)}}">{{ $cursoItem->nombre_curso}}</a> </li>
                @endif
                @empty
                <li>No hay cursos para mostrar</li>
                @endforelse
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                <h3 class="text-left" style="border-bottom:3px solid #4c0d0d">Acreditados</h3>
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


    <div class="modal fade" id="modelIdsss" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content " style="background-color: #fff">
                    <button type="button" class="close mt-1 mr-3 text-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                <div class="modal-body text-center ">
                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->acta_nac}}" alt="" >
                    <a style="color: #984b43" href="/storage/{{auth()->user()->acta_nac}}" download>Descargar </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modelIdsss2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content " style="background-color: #fff">
                    <button type="button" class="close mt-1 mr-3 text-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                <div class="modal-body text-center ">
                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->cedula}}" alt="" >
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modelIdsss3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content " style="background-color: #fff">
                    <button type="button" class="close mt-1 mr-3 text-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                <div class="modal-body text-center ">
                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->credencial}}" alt="" >
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modelIdsss4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content " style="background-color: #fff">
                    <button type="button" class="close mt-1 mr-3 text-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                <div class="modal-body text-center ">
                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->carta_expo}}" alt="" >
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modelIdsss5" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content " style="background-color: #fff">
                    <button type="button" class="close mt-1 mr-3 text-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                <div class="modal-body text-center ">
                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->fotografia}}" alt="" >
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modelIdsss6" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content " style="background-color: #fff">
                    <button type="button" class="close mt-1 mr-3 text-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                <div class="modal-body text-center ">
                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->curp}}" alt="" >
                </div>
            </div>
        </div>
    </div>
@endsection
