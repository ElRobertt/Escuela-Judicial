@extends('layouts.log')

@section('content')
<div class="container">

    <div class="m-0 vh-100 row justify-content-center align-items-center">
        <div class="col-md-8">

            <div class="card " style="border-color: #4c0d0d !important;
            border: 3px solid;">
            <div class="col-12">
                <a href="{{ route('login')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#4c0d0d" class="bi bi-arrow-left" style="margin-left: 5%; margin-top:3%" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                </a>
            </div>


                <img src="../images/escuelajulogo.png" class=" text-center mx-auto d-block" style="height:250px; width:250px; margin-top:20px; margin-bottom:20px"  alt="">



                <div class="card-header text-center txtprimary">{{ __('Reset Password') }}</div>
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
                                <label for="email" class="col text-center" style="font-family: 'montserrat' ; font-size:14px;">Direccion de correo electornico</label>
                            </div>
                        </div>
                        <div class="row text-center offset-md-3">
                            <div class="col-md-8">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope " viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                              </svg>
                                        </div>

                                    </div>
                                    <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <div class="col-md-4 offset-md-4">
                                <a type="submit" class="btn btn-primary   btn-block " style="border:  #aaa; background-color:#4c0d0d; color:#aaa; border-radius: 5px ">
                                    {{ __('Send Password Reset Link') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
