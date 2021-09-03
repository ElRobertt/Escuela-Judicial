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

<div class="justify-content-left">
<div class="container rounded">
    <div class="row justify-content-left">
        <div class="col-12 col-sm-3 col-md-12 col-lg-12 col-xl-12">

            <div class="margs mt-2 card bg-transparent rounded line border-primary" style="border-color: #4c0d0d !important;
            border: 5px solid; border-bottom:none">
            <div class="row mt-2 ml-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#4c0d0d" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                  </svg>
            </div>
                <div class="card-header-primary txtprimary  ml-3">

                    <h2>Datos Generales</h2></div>
                    <div class="card-body">
            <table class="table table-sm">
                <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">

                <thead>
                  <tr>
                    <th scope="row">Completa los siguientes campos.</th>

                  </tr>
                </thead>
                <tbody>

                  <tr>

                    <td>
                    @csrf
                        <input id="role_id" type="hidden" name="role_id" value="2" required autocomplete="name">
                        <div class="form-group row">
                            <label for="name" class="col-12  col-form-label-sm text-md-left">Nombre Completo</label><br>
                            <div class="col-12 ">
                                <input id="name" type="text" class="form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-group row">
                            <label for="email" class="col-12 col-form-label-sm text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-12">
                                <input id="email" type="email" class="form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label-sm text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-12 col-form-label-sm text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-12">
                                <input id="password-confirm" type="password" class="form-control-sm" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </td>
                  </tr>
                  <tr>
                      <td>
                        <div class="form-group row">
                            <label for="edad" class="col-12 col-form-label-sm text-md-left">Edad</label>
                            <div class="col-md-12">
                                <input id="edad" type="" class="form-control-sm" name="edad" required autocomplete="">
                            </div>
                        </div>
                      </td>
                      <td>
                        <div class="form-group row">
                            <label for="numero" class="col-12 col-form-label-sm text-md-left">Número Telefónico</label>
                            <div class="col-md-12">
                                <input id="numero" type="" class="form-control-sm" name="numero" required autocomplete="">
                            </div>
                        </div>
                      </td>
                  </tr>
                  <tr>

                    <td>
                        <div class="form-group row">

                            <label for="cargo" class="col-12 col-form-label-sm text-md-left">Cargo que desempeña</label>
                            <div class="col-12">
                                <input id="cargo" type="" class="form-control-sm" name="cargo" required autocomplete="">
                            </div>
                        </div>
                    </td>
                    <td>

                        <div class="form-group row">
                            <label for="institucion" class="col-12 col-form-label-sm text-md-left">Institucion Laboral</label>
                            <div class="col-12">
                                <input id="institucion" type="" class="form-control-sm" name="institucion" required autocomplete="">
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">Imagen perfil</label>
                                <input name="imagen_perfil" class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                    </td>
                  </tr>

                </tbody>
              </table>







                        {{--

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


                        <div class="col-md-12 offset-5 ">
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
