@extends('layouts.log')

@section('content')
<div class="container">

    <div class="m-0 vh-100 row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card " style="border-color: #4c0d0d !important;
            border: 3px solid;">
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
                                <label for="email" class="col" style="font-family: 'montserrat' ; font-size:14px;">Direccion de correo electornico</label>
                            </div>
                        </div>
                        <div class="row text-center offset-md-3">
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn " style="border: solid 3px #aaa; background-color:#aaa; color:#4c0d0d; border-radius: 20px ">
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
