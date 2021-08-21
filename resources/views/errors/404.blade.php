@extends('layouts.log')
<div class="container">
    <div class="row m-0 vh-100 justify-content-center align-items-center">
        <div class="col-12 text-center">
            {{-- <img src="../images/escuelajulogoer.png" style="height: 300px; widht:650px" alt=""> --}}
            <h1 class="" style="font-family: 'montserrat'; font-size:60px">ERROR</h1>
            <h1 class="" style="font-family: 'montserrat'; font-size:60px">404</h1>
            <h2 style="color: #4c0d0d">Pagina no encontrada</h2>
            <a  class="btn btn-primary colorbtnp" href="{{route('inicio.index')}}">Regresar al inicio</a>
        </div>
    </div>
</div>
