@extends('layouts.layout' )
@section('title', 'Usuario | '. auth()->user()->name  )



@section('content')

    <div class="container " style="padding:4em 2rem; margin-top:150px !important">
        <div class="row " style="margin-top: 100px">
            <div class="col-12 col-sm-12 col-lg-4 col-xl-4  " style="">
                <h2 class="mt-1"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="50" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                  </svg>Datos Generaless</h2>
                <img class="img-fluid rounded-circle text-center offset-0" src="/storage/{{auth()->user()->imagen_perfil}}" alt="Card image cap" style="max-height: 300px">
            </div>
                <div class="col-sm-12 col-md-5 col-lg-6 col-xl-4 mt-lg-5">
                    <div class="text-left">
                        <h3 class="text-center"> <b> {{auth()->user()->name}}</b> </h3>
                        <h5 class="text-center"> Juez</h5>
                        <p class="text-secondary ml-0 text-center ">Email: <br> <b>{{auth()->user()->email}}</b> </p>
                        <p class="text-center" style="margin-top: 0px !important">Fecha Nacimiento: <br> <b>12/3/1993</b> </p>
                        <p style="margin-top: 0px !important"  class="text-center">Grado Estudios: <br> <b> Lic. derecho</b> </p>
                            <p class="text-center">Fecha Inscripcion: <b>28/6/2021</b> </p>
                            @if (auth()->user()->role_id==1)
                            <p style="margin-top: 0px !important" class="text-secondary text-center">Rol: <b>Administrador</b> </p>
                            @else
                            <p class="text-secondary text-center">Rol: <b>Alumno</b> </p>
                            @endif
                            @if (auth()->user()->hasRoles(1))
                            <div class="text-center">
                                {{-- <a class="btn btn-primary btn-sm btn-block  colorbtnpss mb-0" href="{{route('usuario.edit', $usuario)}}">Editar </a> --}}
                            </div>
                        <div class="col-sm-12 mb-3 col-md-4 mb-md-0 mt-0">
                    @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-4 col-xl-1 mt-lg-5">
                    @if (auth()->user()->hasRoles(1))
                    <div class="text-center">
                        <button style="border-color:#4c0d0d" class="btn  btn-sm btn-block delete-btn colorbtnpss " data-toggle="modal" data-target="#modelId"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                          </svg></button>
                    </div>
                @endif
                </div>
            </div>

            <div class="col-12">
                <h5 class="text-left p-2 " style="border-bottom:3px solid #4c0d0d"><b> Documentacion Anexada</h5>
            </div>

              <div class="col-10 mt-2">
                <section class="row text-center">
                <ul class="nav nav-tabs text-center">
                    <li class="active ml-3 text-center"><a id="CP1" href="#tab-1">
                        <svg id="check1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" style="visibility: hidden"  viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                          </svg>
                        COPIA CERTIFICADA ACTA NACIMIENTO |</a></li>

                    <li class="ml-3"><a id="CP2" href="#tab-2"><svg id="check2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" style="visibility: hidden"  viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                      </svg>COPIA CERTIFICADA CEDULA/TITULO |</a></li>

                     <li class="ml-3"><a id="CP3" href="#tab-3"><svg id="check3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" style="visibility: hidden"  viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                      </svg>COPIA CREDENCIAL DEL ELECTOR |</a></li>

                    <li class="ml-3"><a id="CP4" href="#tab-4">
                        <svg id="check4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" style="visibility: hidden"  viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                          </svg>CARTA EXPOSICION MOTIVOS |</a></li>
                    <li class="ml-3"><a id="CP5"href="#tab-5"><svg id="check5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" style="visibility: hidden"  viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                      </svg>FOTOGRAFIAS TAMAÑO CREDENCIAL BLANCO Y NEGRO |</a></li>
                    <li class="ml-3"><a id="CP6" href="#tab-6"><svg id="check6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" style="visibility: hidden"  viewBox="0 0 16 16">
                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                      </svg>COPIA SIMPLE CURP |</a></li>

                </ul>

                <div class="tab-content offset-4">
                    <div id="tab-1" class="tab-pane active text-center">
                            <div class="form-group row">
                                <div class="col-8 ">

                                     <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->acta_nac}}" alt="" style="max-height: 430px">
                                     <a data-toggle="modal"  data-target="#modelIdsss" href=""> Expandir</a>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
                    <div id="tabs-22" class="tab-content">
                    <div id="tab-2" class="tab-pane ">
                        <span class="glyphicon glyphicon-leaf glyphicon--home--feature two columns text-center"></span>
                        <span class="col-md-10">
                            <div class="form-group row" id="1">
                                <div class="col-8">
                                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->cedula}}" alt="" style="max-height: 430px">
                                     <a data-toggle="modal"  data-target="#modelIdsss2" href=""> Expandir</a>
                                    <script>
                                        // Obtener referencia al input y a la imagen
                                const $seleccionArchivos2 = document.querySelector("#formFiless"),
                                $imagenPrevisualizacion2 = document.querySelector("#imagenPrevisualizacion2");

                                // Escuchar cuando cambie
                                $seleccionArchivos2.addEventListener("change", () => {
                                // Los archivos seleccionados, pueden ser muchos o uno
                                const archivos = $seleccionArchivos2.files;
                                // Si no hay archivos salimos de la función y quitamos la imagen
                                if (!archivos || !archivos.length) {
                                    $imagenPrevisualizacion2.src = "";
                                    return;
                                }
                                // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                                const primerArchivo = archivos[0];
                                // Lo convertimos a un objeto de tipo objectURL
                                const objectURL = URL.createObjectURL(primerArchivo);
                                // Y a la fuente de la imagen le ponemos el objectURL
                                $imagenPrevisualizacion2.src = objectURL;
                                var intro = document.getElementById('CP2');
                                    intro.style.cssText = 'color: green;';
                                    var check = document.getElementById('check2');
                                    check.style.visibility = "visible";
                                });

                                    </script>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="tab-content">
                    <div id="tab-3" class="tab-pane">
                        <span class="glyphicon glyphicon-fire glyphicon--home--feature two columns text-center"></span>
                        <span class="col-md-10">
                            <div class="form-group row " id="2">
                                <div class="col-8">
                                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->credencial}}" alt="" style="max-height: 430px">
                                     <a data-toggle="modal"  data-target="#modelIdsss3" href=""> Expandir</a>



                                    <script>
                                        // Obtener referencia al input y a la imagen
                                const $seleccionArchivos3 = document.querySelector("#formFiles3"),
                                $imagenPrevisualizacion3 = document.querySelector("#imagenPrevisualizacion3");

                                // Escuchar cuando cambie
                                $seleccionArchivos3.addEventListener("change", () => {
                                // Los archivos seleccionados, pueden ser muchos o uno
                                const archivos = $seleccionArchivos3.files;
                                // Si no hay archivos salimos de la función y quitamos la imagen
                                if (!archivos || !archivos.length) {
                                    $imagenPrevisualizacion3.src = "";
                                    return;
                                }
                                // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                                const primerArchivo = archivos[0];
                                // Lo convertimos a un objeto de tipo objectURL
                                const objectURL = URL.createObjectURL(primerArchivo);
                                // Y a la fuente de la imagen le ponemos el objectURL
                                $imagenPrevisualizacion3.src = objectURL;
                                var intro = document.getElementById('CP3');
                                    intro.style.cssText = 'color: green;';
                                    var check = document.getElementById('check3');
                                    check.style.visibility = "visible";
                                });

                                    </script>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-4" class="tab-pane">
                        <span class="glyphicon glyphicon-tint glyphicon--home--feature two columns text-center"></span>
                        <span class="col-md-10">
                            <div class="form-group row">
                                <div class="col-8">
                                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->carta_expo}}" alt="" style="max-height: 430px">
                                     <a data-toggle="modal"  data-target="#modelIdsss4" href=""> Expandir</a>

                                    <script>
                                        // Obtener referencia al input y a la imagen
                                const $seleccionArchivos4 = document.querySelector("#formFiles4"),
                                $imagenPrevisualizacion4 = document.querySelector("#imagenPrevisualizacion4");

                                // Escuchar cuando cambie
                                $seleccionArchivos4.addEventListener("change", () => {
                                // Los archivos seleccionados, pueden ser muchos o uno
                                const archivos = $seleccionArchivos4.files;
                                // Si no hay archivos salimos de la función y quitamos la imagen
                                if (!archivos || !archivos.length) {
                                    $imagenPrevisualizacion4.src = "";
                                    return;
                                }
                                // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                                const primerArchivo = archivos[0];
                                // Lo convertimos a un objeto de tipo objectURL
                                const objectURL = URL.createObjectURL(primerArchivo);
                                // Y a la fuente de la imagen le ponemos el objectURL
                                $imagenPrevisualizacion4.src = objectURL;
                                var intro = document.getElementById('CP4');
                                    intro.style.cssText = 'color: green;';
                                    var check = document.getElementById('check4');
                                    check.style.visibility = "visible";
                                });

                                    </script>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-5" class="tab-pane ">
                        <span class="glyphicon glyphicon-leaf glyphicon--home--feature two columns text-center"></span>
                        <span class="col-md-10">
                            <div class="form-group row">
                                <div class="col-8">

                                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->fotografia}}" alt="" style="max-height: 430px">
                                    <a data-toggle="modal"  data-target="#modelIdsss5" href=""> Expandir</a>

                                    <script>
                                        // Obtener referencia al input y a la imagen
                                const $seleccionArchivos5 = document.querySelector("#formFiles5"),
                                $imagenPrevisualizacion5 = document.querySelector("#imagenPrevisualizacion5");

                                // Escuchar cuando cambie
                                $seleccionArchivos5.addEventListener("change", () => {
                                // Los archivos seleccionados, pueden ser muchos o uno
                                const archivos = $seleccionArchivos5.files;
                                // Si no hay archivos salimos de la función y quitamos la imagen
                                if (!archivos || !archivos.length) {
                                    $imagenPrevisualizacion5.src = "";
                                    return;
                                }
                                // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                                const primerArchivo = archivos[0];
                                // Lo convertimos a un objeto de tipo objectURL
                                const objectURL = URL.createObjectURL(primerArchivo);
                                // Y a la fuente de la imagen le ponemos el objectURL
                                $imagenPrevisualizacion5.src = objectURL;
                                var intro = document.getElementById('CP5');
                                    intro.style.cssText = 'color: green;';
                                    var check = document.getElementById('check5');
                                    check.style.visibility = "visible";
                                });

                                    </script>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>




                <div class="tab-content">
                    <div id="tab-6" class="tab-pane">
                        <span class="glyphicon glyphicon-fire glyphicon--home--feature two columns text-center"></span>
                        <span class="col-md-10">
                            <div class="form-group row">
                                <div class="col-8">
                                    <img data-target="#modelId" id="imgs1" onclick="funcs" class="img-thumbnail text-center offset-0 mt-3" src="/storage/{{auth()->user()->curp}}" alt="" style="max-height: 430px">
                                    <a data-toggle="modal"  data-target="#modelIdsss6" href=""> Expandir</a>
                                    <script>
                                        // Obtener referencia al input y a la imagen
                                const $seleccionArchivos6 = document.querySelector("#formFiles6"),
                                $imagenPrevisualizacion6 = document.querySelector("#imagenPrevisualizacion6");

                                // Escuchar cuando cambie
                                $seleccionArchivos6.addEventListener("change", () => {
                                // Los archivos seleccionados, pueden ser muchos o uno
                                const archivos = $seleccionArchivos6.files;
                                // Si no hay archivos salimos de la función y quitamos la imagen
                                if (!archivos || !archivos.length) {
                                    $imagenPrevisualizacion6.src = "";
                                    return;
                                }
                                // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                                const primerArchivo = archivos[0];
                                // Lo convertimos a un objeto de tipo objectURL
                                const objectURL = URL.createObjectURL(primerArchivo);
                                // Y a la fuente de la imagen le ponemos el objectURL
                                $imagenPrevisualizacion6.src = objectURL;
                                var intro = document.getElementById('CP6');
                                    intro.style.cssText = 'color: green;';
                                    var check = document.getElementById('check6');
                                    check.style.visibility = "visible";
                                });

                                    </script>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
            </section>


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

        <div class="row">



            <div class="col-6 mt-3">
                <h4>Lista de cursos</h4>
                <h3 class="text-left" style="border-bottom:3px solid #4c0d0d">Pendientes</h3>
                @forelse ($cursos as $cursoItem)
                @if ($cursoItem->pivot->completado==0)
                    <li class="list-group-item list-group-item-action list-group-item-info text-center mb-2"><a  href="{{ route ('curso.show', $cursoItem)}}">{{ $cursoItem->nombre_curso}}</a> </li>
                @endif
                @empty
                <li>No hay cursos para mostrar</li>
                @endforelse
            </div>
            <div class="col-6 mt-5">
                <h3 class="text-center" style="border-bottom:3px solid #4c0d0d">Acreditados</h3>
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
