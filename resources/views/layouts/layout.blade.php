<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/png" href="../../../images/favicon32X.png" />
    <title>@yield('title', 'Tribunal')</title>



</head>
<header>
    @include('partials.nav')

</header>
<body>


    @yield('content')

        <script src="https://kit.fontawesome.com/b301d5de94.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<footer class="navbar navbar-fixed-bottom mt-5" style=" background-color: rgba(187, 150, 80);">

            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3  text-left ">
                <div class="row">
                    <h5 style="list-style: none; font-weight: bold;
                    font-size: 20px; color:#dbad3a !important" class="text-center mt-1"> EXPLORAR</h5>
                </div>
                <div class="row">
                    <ul style="list-style: none;" >
                        <li><a  style="color:#4c0d0d !important" href="">Inicio</a></li>
                        <li><a  style="color:#4c0d0d !important" href="">Cursos y Diplomados</a></li>
                        <li><a  style="color:#4c0d0d !important" href="">Perfil</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                <div class="row">
                    <h5 style="list-style: none; font-weight: bold;
                    font-size: 20px; color:#dbad3a !important" class="text-center mt-1"> VISITANOS</h5>
                </div>


                <div class="row " style="color:#4c0d0d !important">
                    <ul style="list-style: none">
                        <li>Zacatecas #109 sur</li>
                        <li>Col. Centro</li>
                        <li>63000 Tepic, Nayarit</li>
                        <li> Tel. (311) 215 4700, 216 0900</li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-0 text-center mt-3 " style="height: 200px; ">
                    <h5 style="list-style: none; font-weight: bold; font-size: 20px; color:#dbad3a !important">REDES SOCIALES</h5>
                    <div class="row " style="color:#4c0d0d !important">
                        <h3 class="mr-2 " style="margin-left: 75px" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></h3>
                        <h3 class="mr-2 ml-4" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></h3>
                        <h3 class="mr-2 ml-4" href="#"><i class="fa fa-youtube" aria-hidden="true"></i></h3>
                        <h3 class="mr-2 ml-4" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></h3>
                    </div>

                        <img class="" style="height:120px; width:150px" src="../../images/escuelajulogo.png" alt="" srcset="">

            </div>


</footer>
</html>
