<style>
    .active a{
        color: blue;
        text-decoration: none;
    }

</style>
<div class="justify-content-center">

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-none navbar-center  " style="padding: 0;">
    <div class="container linedown " >
        <div class="row mb-0 d-flex justify-content-center" style="background-color: none; padding: 0;">
            <div class="col-6 " style="background-color: white">
                <img class=" logos2" src="../../images/poderjudlogo.png" alt="" srcset="">
            </div>
            <div class="col-6" style="background-color: white">
                <img class="rounded float-left logos" src="../../images/escuelajulogo.png" alt="" srcset="">
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="background-color: white; height:20px !important" >

            </div>
        </div>
        <div class="row align-items-center d-flex justify-content-center" style="background-color: rgba(187, 150, 80); ">
            <div class="col-2  d-flex  justify-content-center ">
                <div class="" id="navbarTogglerDemo01">
                    <ul class="navbar-nav  ">
                      <li class="nav-item {{ setActive('inicio.*')}}">
                          <a class="nav-link ass" href="{{ route('inicio.index')}}">Inicio</a>
                      </li>
                    </ul>
                  </div>
            </div>
            <div class="col-2 d-flex justify-content-center ">
                <li class="nav-item text-center {{ setActive('curso.index')}}" style="list-style: none">
                    <a class="nav-link ass" href="{{ route('curso.index')}}">Cursos y diplomados</a>
                 </li>
            </div>
            <div class="col-2 d-flex justify-content-center ">
                 <li class="nav-item {{ setActive('perfil.*')}}" style="list-style: none">
                    <a class="nav-link ass" style="" href="{{ route('perfil.index')}} ">Mi Perfil</a>
                 </li>
            </div>

            @if (auth()->user()->hasRoles(1))
            <div class="col-2 d-flex justify-content-center">
                <li style="list-style: none" class="nav-item {{ setActive('usuario.*')}}">
                    <a class="nav-link ass"  href="{{ route('usuario.index')}}">Usuarios</a>
                </li>
            </div>
            <div class="col-2">
                <li style="list-style: none" class="nav-item {{ setActive('curso.create')}}">
                    <a class="nav-link ass "  href="{{ route('curso.create')}}" style="">Agregar curso</a>
                </li>
            </div>
            <div class="col-2 d-flex ass">
                <li class="nav-item dropdown mt-0" style="list-style: none">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle ass " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{auth()->user()->name}}
                    </a>

                    <div class="dropdown-menu ass " style=" list-style: none; color:white !important" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item ass " href="{{ route('login')}}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           Cerrar sesion
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </div>
            @else
            <div class="col-2 d-flex ass ">
                <li class="nav-item dropdown mt-0" style="list-style: none">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{auth()->user()->name}}
                    </a>

                    <div class="dropdown-menu ass" style=" list-style: none" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item ass" href="{{ route('login')}}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           Cerrar sesion
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </div>
            @endif

         {{-- <div clas


        </div>

        <div class="row" style="background-color: rgba(187, 150, 80); padding:4; border-left: 3px solid #4c0d0d; border-right: 3px solid #4c0d0d;">
                   s="col"<li style="list-style: none" class="nav-item {{ setActive('usuarios.*')}}">
                    <a class="nav-link font133 "  href="{{ route('usuario.index')}}">Agregar curso</a>
                    </li></div>
                <div class="col">
                    <li style="list-style: none" class="nav-item {{ setActive('usuarios.*')}}">
                        <a class="nav-link font133 "  href="{{ route('usuario.index')}}"></a>
                    </li>
                </div> --}}

        </div>
    </div>

</div>
