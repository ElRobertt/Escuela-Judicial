

@extends('layouts.log')
@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<div class="container bg-transparent">
    <div class="row m-0 vh-100 row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card bg-white rounded line border-primary" style="border-color: #4c0d0d !important;
            border: 3px solid;">
                <div class=" bg-transparent d-flex justify-content-center"><img class="col-12 col-sm-8 col-md-8 col-lg-5 col-xl-5 logaa mt-3" src="images/escuelajulogo.png" alt="" srcset=""></div>

                <div class="card-body " >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row d-flex justify-content-center">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
                            <h2 class="txtprimary mls mb-4" >INGRESA TUS DATOS PARA INICIAR SESION</h2>

                            <div class="col-xl-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4c0d0d" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                          </svg></span>
                                      </div>
                                    <input id="email" placeholder="Correo Electronico" type="email" class="form-control @error('email') is-invalid @enderror;  " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center ">
                            <div class="col-xl-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4c0d0d" class="bi bi-lock" viewBox="0 0 16 16">
                                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                                          </svg></span>
                                    </div>
                                    <input id="password" placeholder="Contraseña" type="password" class=" form-control @error('password') is-invalid @enderror " name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                        </div>

                        <div class="form-group row d-flex msl">
                            <div class="col-md-6 ml-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 offset-md-2 justify-content-center ">
                                <button type="submit" class=" btn btn-lg btn-block colorbtnp">
                                    {{ __('Login') }}
                                </button><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2 justify-content-center mt-0 text-center" style="">
                                <a class="btn btn-lg text-center btn-block " style="color: #aaa;border: solid 1px #aaa; border-radius: 10px; background-color:transparent" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8 offset-md-4 mt-2 justify-content-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link-primary   " href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
