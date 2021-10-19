@extends('layouts.log')

@section('content')
<style>
    .file {
  visibility: hidden;
  position: absolute;
}
</style>


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

        </div>
    </div>

<div class="container rounded">
    <div class="row justify-content-left">
        <div class="col-12 col-sm-3 col-md-12 col-lg-12 col-xl-12">

            <div class=" mb-5 mt-2 card bg-transparent rounded line border-primary" style="border-color: #4c0d0d !important;
            border: 5px solid; ">

            <div class="row mt-2 ml-2 ">
                <a href="http://escuela-judicial.test/login">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="#4c0d0d" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                </a>
            </div>

                <div class="card-header-primary txtprimary  ml-3">
                    <h2>Datos Generales</h2>
                    <h6>Completa los siguientes campos para tu solicitud de registro.</h6>
                </div>

        <div class="card-body">
            <table class="table table-sm">
                <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                <tbody>
                    <tr>
                        <div class="form-group row">
                            <div class="col-12  col-md-6 col-lg-4 text-center">


                                <img id="imagenPrevisualizacion2222" style="max-height: 250px; height:250px; width:250px "class="img-fluid img-thumbnail text-center rounded-circle " > <br>
                                <label for="formFile" class="form-label mt-2">Imagen perfil</label>
                                <input name="imagen_perfil" class="form-control " type="file" id="formFilessss" required>
                                <script>
                                    // Obtener referencia al input y a la imagen
                            const $seleccionArchivos = document.querySelector("#formFilessss"),
                            $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion2222");

                            // Escuchar cuando cambie
                            $seleccionArchivos.addEventListener("change", () => {
                            // Los archivos seleccionados, pueden ser muchos o uno
                            const archivos = $seleccionArchivos.files;
                            // Si no hay archivos salimos de la función y quitamos la imagen
                            if (!archivos || !archivos.length) {
                                $imagenPrevisualizacion2222.src = "";

                                return;
                            }
                            // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                            const primerArchivo = archivos[0];
                            // Lo convertimos a un objeto de tipo objectURL
                            const objectURL = URL.createObjectURL(primerArchivo);
                            // Y a la fuente de la imagen le ponemos el objectURL
                            $imagenPrevisualizacion.src = objectURL;


                            });




                                </script>
                            </div>
                        </div>
                    </tr>
                  <tr>
                    @csrf
                        <input id="role_id" type="hidden" name="role_id" value="2" required autocomplete="name">
                        <div class="form-group row">
                            <div class="col-12 col-lg-6">
                            <label for="name" class="col-12  form-label-sm text-md-left">Nombre Completo</label><br>
                            <div class="col-12 ">
                                <input id="name" type="text"
                                style="border: 0px !important" class="col-12 col-lg-7 form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         <div class="col-12 col-lg-6">
                            <label for="email" class="col-12 form-label-sm text-md-left">Correo Electronico</label><br>

                            <div class="col-12">
                                <input id="email" type="email"
                                style="border: 0px !important" class="col-12 col-lg-7  form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         <div class="col-12 col-lg-6">
                            <label for="password" class="mt-2 col-md-12  form-label-sm text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password"
                                style="border: 0px !important" class="col-12 col-lg-7  form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         <div class="col-12 col-lg-6">
                            <label for="password-confirm" class=" mt-2  col-12 form-label-sm text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-12">
                                <input id="password-confirm" type="password"
                                style="border: 0px !important"
                                class="form-control-sm col-12 col-lg-7 " name="password_confirmation" required autocomplete="new-password">
                            </div>
                         </div>
                         <div class="col-12 col-lg-6">
                            <label for="edad" class="col-12 form-label-sm mt-2  text-md-left">Edad</label>
                            <div class="col-md-12">
                                <input id="edad" type=""
                                style="border: 0px !important"
                                class="col-12 col-lg-7 form-control-sm" name="edad" required autocomplete="">
                            </div>
                         </div>
                         <div class="col-12 col-lg-6">
                            <label for="numero" class="col-12 col-lg-7  col-12 form-label-sm mt-2  text-md-left">Número Telefónico</label>
                            <div class="col-md-12">
                                <input id="numero" type="" class="col-12 col-lg-7  form-control-sm"
                                style="border: 0px !important" name="numero" required autocomplete="">
                            </div>
                         </div>
                         <div class="col-12 col-lg-6">
                            <label for="cargo" class="col-12 form-label-sm  mt-2  text-md-left">Cargo que desempeña</label>
                            <div class="col-md-12" style="border-color: 5px solid #4c0d0d">
                                <select
                                name="cargo"
                                id="dirigido_id"
                                class="form-control offset-lg-0 col-lg-7 mb-3"
                                >
                                @foreach ($dirigidos as $id => $name)
                                    <option value="{{$id}}">{{$name}}</option>
                                @endforeach
                            </select>
                            </div>
                         </div>
                         <div class="col-12 col-lg-6">
                                    <label for="institucion" class="col-12 form-label-sm mt-2  text-md-left">Institucion Laboral
                                    </label>
                                    <div class="col-12">
                                    <input id="institucion" type="" class="col-12 col-lg-7 form-control-sm"
                                    style="border: 0px !important"
                                    name="institucion" required autocomplete="">
                                    </div>
                                </div>
                            </div>
                        </tr>
                    </div>
                </tbody>
            </table>

                <div class="col-12">
                    <h5 class="text-left " style="border-bottom:3px solid #4c0d0d"><b> Adjunta la siguiente documentacion</h5>
                </div>

                <div class="col-12">
                <div class="container">
                <section class="row align-items-center">
                  <div class="col-12 col-lg-6">
                    <ul class="ulli nav nav-tabs text-left" >
                        <li class="active ml-sm-0 ml-lg-3  text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check1" disabled>
                                <a id="CP1" href="#tab-1" class="form-check-label" for="defaultCheck1">
                                    COPIA CERTIFICADA ACTA NACIMIENTO
                                </a>
                            </div>
                        </li>
                        <li class=" ml-sm-0 ml-lg-3 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check4" disabled>
                                <a id="CP4" href="#tab-4" class="form-check-label" for="defaultCheck1">
                                    CARTA EXPOSICION MOTIVOS
                                </a>
                            </div>
                        </li>
                        <li class=" ml-sm-0 ml-lg-3 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check2" disabled>
                                <a id="CP2" href="#tab-2" class="form-check-label" for="defaultCheck1">
                                    COPIA CERTIFICADA CEDULA/TITULO
                                </a>
                            </div>
                        </li>

                        <li class=" ml-sm-0 ml-lg-3 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check3" disabled>
                                <a id="CP3" href="#tab-3" class="form-check-label" for="defaultCheck1">
                                    COPIA CREDENCIAL DEL ELECTOR
                                </a>
                            </div>
                        </li>
                        <li class="ml-sm-0 ml-lg-3 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check5" disabled>
                                <a id="CP5" href="#tab-5" class="form-check-label" for="defaultCheck1">
                                    FOTOGRAFIAS TAMAÑO CREDENCIAL BLANCO Y NEGRO
                                </a>
                            </div>
                        </li>

                        <li class=" ml-sm-0 ml-lg-3 text-left">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""  id="check6" disabled>
                                <a id="CP6" href="#tab-6" class="form-check-label" for="defaultCheck1">
                                    COPIA SIMPLE CURP                                 </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-lg-6 tab-content" style="background-color: white; border-radius:4px ">
                    <div id="tab-12" class="tab-pane"></div>


                    <div class="tab-content ">
                        <div id="tab-1" class="tab-pane active text-center">
                            <span class="glyphicon glyphicon-tint glyphicon--home--feature two columns text-center"></span>
                            <span class="col-md-10">
                                <div class="form-group row">
                                    <div class="col-12 col-sm-12 col-lg-11">
                                        <h6> <b> COPIA CERTIFICADA ACTA NACIMIENTO</h6>
                                        <a type="button"  data-toggle="modal" style="background-color: transparent !important; border-color:none !important" data-target="#MDLHELP">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4c0d0d" class="text-left bi bi-question-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                                              </svg>
                                            </a> <br>


                                        <img class="img-fluid img-thumbnail mt-1" style="height: 250px;width: 250px" id="imagenPrevisualizacion2223">
                                         <input name="acta_nac" class="mt-2 form-control" type="file" id="formFiles33" required>

                                         <script>
                                            // Obtener referencia al input y a la imagen
                                    const $seleccionArchivos202 = document.querySelector("#formFiles33"),
                                    $imagenPrevisualizacion202 = document.querySelector("#imagenPrevisualizacion2223");

                                    // Escuchar cuando cambie
                                    $seleccionArchivos202.addEventListener("change", () => {
                                    // Los archivos seleccionados, pueden ser muchos o uno
                                    const archivos = $seleccionArchivos202.files;
                                    // Si no hay archivos salimos de la función y quitamos la imagen
                                    if (!archivos || !archivos.length) {
                                        $imagenPrevisualizacion202.src = "";
                                        return;
                                    }
                                    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                                    const primerArchivo = archivos[0];
                                    // Lo convertimos a un objeto de tipo objectURL
                                    const objectURL = URL.createObjectURL(primerArchivo);
                                    // Y a la fuente de la imagen le ponemos el objectURL
                                    $imagenPrevisualizacion202.src = objectURL;
                                    var intro = document.getElementById('CP1');
                                        intro.style.cssText = 'color: green;';
                                        var check = document.getElementById('check1');
                                        check.style.visibility = "visible";
                                        var check2=
                                        document.getElementById("check1").checked = true;
                                    });

                                        </script>
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
                                    <div class="col-12 col-lg-11">
                                        <h6  class="text-center"> <b> COPIA CERTIFICADA CEDULA/TITULO <br> <a type="button"  data-toggle="modal" style="background-color: transparent !important; border-color:none !important" data-target="#MDLHELP">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4c0d0d" class="text-left bi bi-question-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                                              </svg>
                                            </a></h6>

                                        <img class="img-fluid img-thumbnail text-center mt-1" style="height: 250px; width:250px"  id="imagenPrevisualizacion2">
                                        <input name="cedula" class="mt-2 form-control col-12 " type="file" id="formFiless">


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
                                        var check3=
                                        document.getElementById("check2").checked = true;
                                    });

                                        </script>
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
                                        <h6  class="text-center"> <b> COPIA CREDENCIAL DEL ELECTOR <br> <a type="button" class="col-1" data-toggle="modal" style="background-color: transparent !important; border-color:none !important" data-target="#MDLHELP">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4c0d0d" class="text-left bi bi-question-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                                              </svg>
                                            </a></h6>
                                            <img class="img-fluid img-thumbnail" style="height: 250px; width:250px"  id="imagenPrevisualizacion3">
                                            <input name="credencial" class="form-control" type="file" id="formFiles3">
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
                                        var check5=
                                        document.getElementById("check3").checked = true;
                                    });

                                        </script>
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
                                        <h6  class="text-center"> <b> CARTA EXPOSICION MOTIVOS <br> <a type="button" class="col-1" data-toggle="modal" style="background-color: transparent !important; border-color:none !important" data-target="#MDLHELP">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4c0d0d" class="text-left bi bi-question-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                                              </svg>
                                            </a></h6>

                                        <img class="img-fluid img-thumbnail" style="height: 250px; width:250px"  id="imagenPrevisualizacion4">
                                        <input name="carta_expo" class="form-control" type="file" id="formFiles4">
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
                                        var check6=
                                        document.getElementById("check4").checked = true;
                                    });

                                        </script>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="tab-5" class="tab-pane text-center">
                            <span class="glyphicon glyphicon-leaf glyphicon--home--feature two columns text-center"></span>
                            <span class="col-md-10">
                                <div class="form-group row">
                                    <div class="col-12 col-md-11">
                                        <h6  class="text-center"> <b> FOTOGRAFIA TAMAÑO CREDENCIAL EN BLANCO Y NEGRO <br> <a type="button" class="col-1" data-toggle="modal" style="background-color: transparent !important; border-color:none !important" data-target="#MDLHELP">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4c0d0d" class="text-left bi bi-question-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                                              </svg>
                                            </a></h6>

                                        <img class="img-fluid img-thumbnail" style="height: 250px; width:250px"  id="imagenPrevisualizacion5">
                                        <input name="fotografia" class="form-control" type="file" id="formFiles5">

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
                                        var check7=
                                        document.getElementById("check5").checked = true;
                                    });

                                        </script>
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
                                        <h6  class="text-center"> <b> COPIA SIMPLE CURP <br> <a type="button" class="col-1" data-toggle="modal" style="background-color: transparent !important; border-color:none !important" data-target="#MDLHELP">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4c0d0d" class="text-left bi bi-question-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                                              </svg>
                                            </a></h6>
                                            <img class="img-fluid img-thumbnail" style="height: 250px; width:250px"  id="imagenPrevisualizacion6">
                                        <input name="curp" class="form-control" type="file" id="formFiles6">


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
                                        var check8=
                                        document.getElementById("check6").checked = true;

                                            if (check6.checked == true) {
                                                if (check5.checked == true) {
                                                    if (check4.checked == true) {
                                                        var btnss = document.getElementById("btnregis").style.display='inline';
                                                    }

                                                }

                                            }

                                    });
                                        </script>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>

            </section>
        </div>
    </div>
</div>




        {{-- ---ESTE SCRIPT CAMBIA DE VENTANA Y MARCA VERDE COMPLETADO --}}
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

        <script>

        </script>
        <div class="row">
            <div class="col-12 col-lg-12 text-center mb-5">
                <button id="btnregis" type="submit" class="btn-primary btn-lg colorbtnp  "  style="">
                    {{ __('Register') }}
                </button>
            </div>
                    </form>
        </div>

                </div>
            </div>
        </div>

</div>
<script src="https://kit.fontawesome.com/b301d5de94.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


{{-- -------------MODALS-------------------- --}}


<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="MDLHELP" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">AYUDA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <h5>Acontinuacion se muestra el documento que se solicita</h5>
          <img class="img-fluid img-thumbnail" src="images\curp.png" alt="Ejemplo de documento" style="max-height: 300px">
        </div>
        <div class="modal-footer">

          <button type="button" data-dismiss="modal" class="btn-primary btn-outline btn-sm colorbtnp">Listo</button>
        </div>
      </div>
    </div>
  </div>

@endsection
