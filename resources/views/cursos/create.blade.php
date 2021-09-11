@extends('layouts.layout')

@section('title', 'Crear curso')

@section('content')
    <div class="row mt-5" style="height: 100px">

    </div>
    @include('partials.validation-errors')
        @if (auth()->user()->hasRoles(1))
            <form method="POST" enctype="multipart/form-data" action="{{ route('curso.store')}}">

                @csrf
                @include('cursos._form')
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-12 mt-0 offset-lg-3 col-lg-6">
                            <button class="btn  btn-primary colorbtnp btn-block">Añadir curso</button>
                         {{-- <a class="mls5 btn btn-primary btn-lg btn-block colorbtnp" href="{{route('curso.create')}}">Añadir</a> --}}
                     </div>

                    </div>
                </div>
            </form>
        @endif
    @endsection
