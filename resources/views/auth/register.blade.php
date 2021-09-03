@extends('layouts.log')

@section('content')
<style>
    .file {
  visibility: hidden;
  position: absolute;
}
</style>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-none navbar-center  " style="padding: 0;">
    <div class="container-fluid linedown " >
        <div " class=" row mb-0 d-flex justify-content-center" style="background-color: white; padding: 0;">
            <div class="offset-lg-0 col-sm-12 col-md-12 col-lg-6 col-xl-6 ml-0 " style="background-color: white">
                <img class=" logos2 ocultar"   src="../../images/poderjudlogo.png" alt="" srcset="">
            </div>
            <div class="col-12 col-sm-12 mt-3 col-md-6 col-lg-6 col-xl-6 offset-lg-0" style="max-width: 460px; background-color: white">
                <img class="rounded   col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 " src="../../images/escuelajulogo.png" alt="" srcset="">
            </div>
        </div>



</div>
<div class="justify-content-center">





<div class="container rounded">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="card bg-transparent rounded line border-primary" style="border-color: #4c0d0d !important;
            border: 0px solid; border-bottom:none">
                <div class="card-header-primary txtprimary mt-5">
                    <h2>Datos Generales</h2></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="role_id" type="hidden" name="role_id" value="2" required autocomplete="name">
                        <div class="form-group row">
                            <label for="name" class="col-md-5 col-form-label-sm text-md-right">Nombre Completo</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label-sm text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-5 col-form-label-sm text-md-right">Confirmar E-Mail</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control-sm" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label-sm text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-5 col-form-label-sm text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control-sm" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
{{-- ---Segunda fila*--- --}}

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-5">
            <div class="card-body " style="margin-top: 40px">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-5 col-form-label-sm text-md-right">Edad</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="" class="form-control-sm" name="password_confirmation" required autocomplete="">
                        </div>
                    </div>

                    <input id="role_id" type="hidden" name="role_id" value="2" required autocomplete="date">
                    <div class="form-group row">
                        <label for="date" class="col-md-5 col-form-label-sm text-md-right">Fecha Registro</label>
                        <div class="col-md-6">
                            <input disable class="form-control-sm " type="date" id="fecha" name="fecha"  value="<?php echo date("Y-m-d");?>" disable >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-5 col-form-label-sm text-md-right">Numero Telefonico</label>
                        <div class="col-md-6">
                            <input id="email" type="" class="form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-5 col-form-label-sm text-md-right" >Cargo que desempeña</label>

                        <div class="col-md-6">
                            <input id="password" class="form-control-sm @error('password')  is-invalid @enderror" placeholder="Ej. Magistrado" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-5 col-form-label-sm text-md-right">Institucion Laboral</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="" class="form-control-sm" placeholder="Ej. Tribunal Superior de Justicia" name="password_confirmation" required autocomplete="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 " style="margin-top: 60px">
            <div class="card-body ">
                <div id="msg"></div>
            <form method="post" id="image-form">
            <input type="file" name="img[]" class="file" accept="image/*">
                <div class="input-group my-3">
                    <input type="text" class="form-control" disabled placeholder="Buscar Imagen" id="file">
                <div class="input-group-append">
                    <button type="button" id="browse" class="browse btn btn-sm colorbtnp  btn-primary">Buscar</button>
                </div>
            </div>
            </div>
            <div class="ml-2 col-sm-6">
                <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
            </div>
            <script>
                $(document).on("click", ".browse", function() {
                var file = $(this).parents().find(".file");
                file.trigger("click");
                });
                $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);

                var reader = new FileReader();
                reader.onload = function(e) {
                    // get loaded data and render thumbnail.
                    document.getElementById("preview").src = e.target.result;
                };
                // read the image file as a data URL.
                reader.readAsDataURL(this.files[0]);
                });
            </script>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-5">
            <h2>Documentacion Necesaria</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="card-body " style="margin-top: 40px; border: 3px solid #4c0d0d; height:350px">

                <div id="msg" class="text-center"> <h5>COPIA CERTIFICADA ACTA NACIMIENTO</h5></div>

                <form method="post" id="image-form">
                <input type="file" name="img[]" class="file" accept="image/*">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" disabled placeholder="Buscar Imagen" id="file">
                    <div class="input-group-append">
                        <button type="button" id="browse" class="browse btn btn-sm colorbtnp  btn-primary">Buscar</button>
                    </div>
                </div>
                <div class="ml-2 col-sm-6">
                    <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
                </div>
                <script>
                    $(document).on("click", ".browse", function() {
                    var file = $(this).parents().find(".file");
                    file.trigger("click");
                    });
                    $('input[type="file"]').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#file").val(fileName);

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("preview").src = e.target.result;
                    };
                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                    });
                </script>
                </form>
              </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
            <div class="card-body " style="margin-top: 40px; height:350px; border: 3px solid #4c0d0d">

                    <div id="msg" class="text-center"> <h5> COPIA CERTIFICADA CEDULA/TITULO</h5></div>
                <form method="post" id="image-form">
                <input type="file" name="img[]" class="file" accept="image/*">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" disabled placeholder="Buscar Imagen" id="file">
                    <div class="input-group-append">
                        <button type="button" id="browse" class="browse btn btn-sm colorbtnp  btn-primary">Buscar</button>
                    </div>
                </div>


                <div class="ml-2 col-sm-6">
                    <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
                </div>
                <script>
                    $(document).on("click", ".browse", function() {
                    var file = $(this).parents().find(".file");
                    file.trigger("click");
                    });
                    $('input[type="file"]').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#file").val(fileName);

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("preview").src = e.target.result;
                    };
                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                    });
                </script>
                </form>
              </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="card-body " style="margin-top: 40px; height:350px; border: 3px solid #4c0d0d">

                <div id="msg" class="text-center"> <h5>COPIA CREDENCIAL DEL ELECTOR CEDULA/TITULO</h5></div>

                <form method="post" id="image-form">
                <input type="file" name="img[]" class="file" accept="image/*">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" disabled placeholder="Buscar Imagen" id="file">
                    <div class="input-group-append">
                        <button type="button" id="browse" class="browse btn btn-sm colorbtnp  btn-primary">Buscar</button>
                    </div>
                </div>


                <div class="ml-2 col-sm-6">
                    <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
                </div>
                <script>
                    $(document).on("click", ".browse", function() {
                    var file = $(this).parents().find(".file");
                    file.trigger("click");
                    });
                    $('input[type="file"]').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#file").val(fileName);

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("preview").src = e.target.result;
                    };
                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                    });
                </script>
                </form>
              </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="card-body " style="margin-top: 40px; border: 3px solid #4c0d0d; height:350px">

                <div id="msg" class="text-center"> <h5>COPIA CERTIFICADA ACTA NACIMIENTO</h5></div>

                <form method="post" id="image-form">
                <input type="file" name="img[]" class="file" accept="image/*">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" disabled placeholder="Buscar Imagen" id="file">
                    <div class="input-group-append">
                        <button type="button" id="browse" class="browse btn btn-sm colorbtnp  btn-primary">Buscar</button>
                    </div>
                </div>
                <div class="ml-2 col-sm-6">
                    <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
                </div>
                <script>
                    $(document).on("click", ".browse", function() {
                    var file = $(this).parents().find(".file");
                    file.trigger("click");
                    });
                    $('input[type="file"]').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#file").val(fileName);

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("preview").src = e.target.result;
                    };
                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                    });
                </script>
                </form>
              </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" >
            <div class="card-body " style="margin-top: 40px; height:350px; border: 3px solid #4c0d0d">

                    <div id="msg" class="text-center"> <h5> COPIA CERTIFICADA CEDULA/TITULO</h5></div>
                <form method="post" id="image-form">
                <input type="file" name="img[]" class="file" accept="image/*">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" disabled placeholder="Buscar Imagen" id="file">
                    <div class="input-group-append">
                        <button type="button" id="browse" class="browse btn btn-sm colorbtnp  btn-primary">Buscar</button>
                    </div>
                </div>


                <div class="ml-2 col-sm-6">
                    <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
                </div>
                <script>
                    $(document).on("click", ".browse", function() {
                    var file = $(this).parents().find(".file");
                    file.trigger("click");
                    });
                    $('input[type="file"]').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#file").val(fileName);

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("preview").src = e.target.result;
                    };
                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                    });
                </script>
                </form>
              </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="card-body " style="margin-top: 40px; height:350px; border: 3px solid #4c0d0d">

                <div id="msg" class="text-center"> <h5>COPIA CREDENCIAL DEL ELECTOR CEDULA/TITULO</h5></div>

                <form method="post" id="image-form">
                <input type="file" name="img[]" class="file" accept="image/*">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" disabled placeholder="Buscar Imagen" id="file">
                    <div class="input-group-append">
                        <button type="button" id="browse" class="browse btn btn-sm colorbtnp  btn-primary">Buscar</button>
                    </div>
                </div>


                <div class="ml-2 col-sm-6">
                    <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
                </div>
                <script>
                    $(document).on("click", ".browse", function() {
                    var file = $(this).parents().find(".file");
                    file.trigger("click");
                    });
                    $('input[type="file"]').change(function(e) {
                    var fileName = e.target.files[0].name;
                    $("#file").val(fileName);

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // get loaded data and render thumbnail.
                        document.getElementById("preview").src = e.target.result;
                    };
                    // read the image file as a data URL.
                    reader.readAsDataURL(this.files[0]);
                    });
                </script>
                </form>
              </div>
        </div>
    </div>
    <div class="form-group row mb-0 text-center mt-5 mb-5" >
        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn-primary btn-lg colorbtnp ">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</div>
@endsection
