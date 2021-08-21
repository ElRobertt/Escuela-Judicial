@extends('layouts.layout')

@section('title', 'Crear proyecto')

@section('content')

    @include('partials.validation-errors')
        @if (auth()->user()->hasRoles(1))
            <form method="POST" enctype="multipart/form-data" action="{{ route('curso.store')}}">
                @csrf
                @include('cursos._form')
                <div class="container mb-5">
                    <div class="row">
                        <div class="col mt-2 text-center">
                            <div class="text-center">
                            <button class="btn btn-primary">Añadir curso</button>
                                {{-- <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.create')}}">completado</a> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        @endif
    @endsection
