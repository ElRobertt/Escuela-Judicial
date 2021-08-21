@extends('layouts.layout')
@section('title', 'Crear proyecto')



@section('content')
    @include('partials.validation-errors')


    @if (auth()->user()->hasRoles(1))
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <h2 class="text-center txtprimary" style="margin-top: 20px">Actualiza los campos que necesites</h2>
                </div>
            </div>
        </div>

        <form method="POST" enctype="multipart/form-data" action="{{ route('curso.update', $curso)}}">
            @csrf @method('PATCH')

            @include('cursos._form')
            <div class="text-center">
                <button class="btn btn-primary btn-lg colorbtnp">Actualizar datos</button>
                {{-- <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.create')}}">Actualizar datos </a> --}}
            </div>

        </form>
    @endif
@endsection
