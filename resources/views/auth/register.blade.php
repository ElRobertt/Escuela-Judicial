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
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
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

                        <div class="form-group row">
                            <label for="edad" class="col-md-5 col-form-label-sm text-md-right">Edad</label>
                            <div class="col-md-6">
                                <input id="edad" type="" class="form-control-sm" name="edad" required autocomplete="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero" class="col-md-5 col-form-label-sm text-md-right">Número Telefónico</label>
                            <div class="col-md-6">
                                <input id="numero" type="" class="form-control-sm" name="numero" required autocomplete="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cargo" class="col-md-5 col-form-label-sm text-md-right">Cargo que desempeña</label>
                            <div class="col-md-6">
                                <input id="cargo" type="" class="form-control-sm" name="cargo" required autocomplete="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="institucion" class="col-md-5 col-form-label-sm text-md-right">Institucion Laboral</label>
                            <div class="col-md-6">
                                <input id="institucion" type="" class="form-control-sm" name="institucion" required autocomplete="">
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">Imagen perfil</label>
                                <input name="imagen_perfil" class="form-control" type="file" id="formFile">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">COPIA CERTIFICADA ACTA NACIMIENTO</label>
                                <input name="acta_nac" class="form-control" type="file" id="formFile">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">COPIA CERTIFICADA CEDULA/TITULO</label>
                                <input name="cedula" class="form-control" type="file" id="formFile">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">COPIA CREDENCIAL DEL ELECTOR </label>
                                <input name="credencial" class="form-control" type="file" id="formFile">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">CARTA EXPOSICION MOTIVOS</label>
                                <input name="carta_expo" class="form-control" type="file" id="formFile">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">FOTOGRAFIAS TAMAÑO CREDENCIAL BLANCO Y NEGRO</label>
                                <input name="fotografia" class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">COPIA SIMPLE CURP</label>
                                <input name="curp" class="form-control" type="file" id="formFile">
                            </div>
                        </div> --}}




                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn-primary btn-lg colorbtnp ">
                                {{ __('Register') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
