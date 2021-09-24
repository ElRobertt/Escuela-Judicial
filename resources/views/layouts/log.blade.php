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

    <style>
        .active a{
            color: red;
            text-decoration: none;
        }
        body {
            background-image: url("../../../images/bg1s.jpg");
        height: 100%;
        width: 100%;
        position: relative

    </style>

</head>
<header>

</header>
<body>


    @yield('content')
    @yield('mostrar_cursos')


</body>

<footer>

</footer>
</html>
