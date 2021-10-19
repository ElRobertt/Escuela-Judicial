@extends('layouts.log')

@section('content')
<div class="container">

    <div class="m-0 vh-100 row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card " style="border-color: #4c0d0d !important;
            border: 3px solid;">

                <div class="card-header text-center txtprimary">
                    <div class="row mt-2 ml-1">
                        <a href="http://escuela-judicial.test/login">


                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="#4c0d0d" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                          </svg>
                        </a>
                    </div>
                    <h3>{{ __('Restablece tu cuenta') }}</h3>


                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class=" row offset-md-3">
                            <div class="col-md-8 ">
                                <label for="email" class="col" style="font-family: 'montserrat' ; font-size:14px;">Direccion de correo electornico</label>

                            </div>
                        </div>
                        <div class="row text-center offset-md-3">
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                                @error('email')
                                    <span class="text-left invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <h6 class="text-left mt-2">Ingresa tu direccion de correo electronico para continuar.</h6>
                            </div>

                        </div>

                        <div class="form-group row mt-3">
                            <div class="col-12 offset-lg-3">
                                <button type="submit" class="btn colorbtnp" style="border:3px solid" >
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
