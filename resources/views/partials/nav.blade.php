<style>
    .active a{
        color: blue;
        text-decoration: none;
    }

</style>
<div class="justify-content-center">
<nav class="navbar navbar-expand-lg navbar-light bg-none navbar-center ">
    <div class="container linedown ">
        <div class="row">
            <div class="col-6">
                <img class=" logos2" src="../../images/poderjudlogo.png" alt="" srcset="">
            </div>
            <div class="col-6">
                <img class="rounded float-left logos" src="../../images/escuelajulogo.png" alt="" srcset="">
            </div>
        </div>
        <div class="row  ">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 ">
                      <li class="nav-item {{ setActive('inicio.*')}}">
                          <a class="nav-link font1 " href="{{ route('inicio.index')}}">Pagina Principal</a>
                      </li>
                       <li class="nav-item {{ setActive('curso.*')}}">
                          <a class="nav-link font1 ml-5" href="{{ route('curso.index')}}">Cursos y diplomados</a>
                       </li>
                       <li class="nav-item {{ setActive('perfil.*')}}">
                          <a class="nav-link font1 ml-5 " href="{{ route('perfil.index')}}">Mi Perfils</a>
                       </li>
                       <li class="nav-item dropdown mt-0" style="list-style: none">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle font12 " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{auth()->user()->name}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right " style="" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{ route('login')}}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                               Cerrar sesion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    </ul>
                  </div>
            </div>

        </div>

        <div class="row">
                    @if (auth()->user()->hasRoles(1))
                    <div class="col">
                        <li style="list-style: none" class="nav-item {{ setActive('usuarios.*')}}">
                            <a class="nav-link font133 "  href="{{ route('usuario.index')}}">Usuarios</a>
                        </li>
                    </div>
                    <div class="col-6">
                        <li style="list-style: none" class="nav-item {{ setActive('usuarios.*')}}">
                            <a class="nav-link font133 "  href="{{ route('usuario.index')}}">Agregar curso</a>
                        </li>
                    </div>
                     @endif
                 {{-- <div class="col"<li style="list-style: none" class="nav-item {{ setActive('usuarios.*')}}">
                    <a class="nav-link font133 "  href="{{ route('usuario.index')}}">Agregar curso</a>
                    </li></div>
                <div class="col">
                    <li style="list-style: none" class="nav-item {{ setActive('usuarios.*')}}">
                        <a class="nav-link font133 "  href="{{ route('usuario.index')}}"></a>
                    </li>
                </div> --}}
            <div class="col"></div>
        </div>
    </div>

</div>
