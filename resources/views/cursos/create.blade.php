@extends('layouts.layout')

@section('title', 'Crear proyecto')

@section('content')

    @include('partials.validation-errors')
        @if (auth()->user()->hasRoles(1))
            <form method="POST" enctype="multipart/form-data" action="{{ route('curso.store')}}">
                @csrf
                @include('cursos._form')
                <div class="container mb-5">
                    <div class="row  justify-content-center ">
                        <div class="col-6 mt-0 text-center ">
                            <button class="btn  btn-primary colorbtnp btn-block">Añadir curso</button>
                         {{-- <a class="mls5 btn btn-primary btn-lg btn-block colorbtnp" href="{{route('curso.create')}}">Añadir</a> --}}
                     </div>

                    </div>
                </div>
            </form>
        @endif
    @endsection
