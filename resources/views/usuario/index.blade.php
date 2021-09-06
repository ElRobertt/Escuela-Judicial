@extends('layouts.layout')
@section('title', 'Usuarios')

@section('content')
    <div class="container" style="padding:4em 2rem; margin-top:200px !important">
        <div class="row">
            <div class="col-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="64" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                  </svg>
                <h1>Usuarios</h1>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>


                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuario as $user)
                            <tr>
                                <td>{{$user->id}}"</td>
                                <td><a href="{{ route('usuario.show', $user)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                @if ($user->role_id==1)
                                    <td>Admin</td>
                                @else
                                <td>User</td>
                                @endif
                                {{-- <td>{{$user->role_id}}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
