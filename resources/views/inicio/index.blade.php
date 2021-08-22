@extends('layouts.layout')
@section('title', 'Pagina principal')




@section('content')
    <div class="container mb-5">
        <div class="row " height:350px ">
            <div class="col-12 text-center">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active align-items-center">
                        <img class="   " src="images/e1.jpg" alt="primer slide" style="height: 350px" >
                    </div>
                    <div class="carousel-item">
                        <img class="" src="images/e2.png" alt="segundo slide" style="height: 350px">
                    </div>
                    <div class="carousel-item">
                        <img class="" src="images/e3.png" style="height: 350px" alt="tercer slide">
                    </div>
                    </div>
                    <a class="carousel-control-prev mts" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only align-middle" >Anteriro</span>
                    </a>
                    <a class="carousel-control-next mts" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <h2 class="txtprimary ml-1 mt-5">Lista de cursos y diplomados</h2>
        </div>
            <div class="row mt-1 " >
                    @forelse ($inicio as $inicioItem)
                    <div class="col-3 ">
                            <div class="card mb-5" style="width: 270px; min-height:250px">
                                @if ($inicioItem->imagen_curso)

                                    <img class="card-img-top" src="/storage/{{$inicioItem->imagen_curso}}" alt="{{$inicioItem->nombre_curso}}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title text-center bls">{{$inicioItem->nombre_curso}}</h5>
                                    <p class="card-text text-center" style="font-weight: 500;">{{$inicioItem->docente}}</p>
                                    <p class="card-text text-center">{{$inicioItem->fecha}}</p>
                                    <div class="text-center">
                                        <a class="btn btn-primary btn-lg colorbtnp" href="{{route('curso.show', $inicioItem)}}">Ver mas </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @empty
                    @endforelse
            </div>



        <div class="row">
            <h2 class="txtprimary mt-3 ml-5">Comunicados</h2>
        </div>

        <div class="row">
            <div class="col 12 text-center mt-5">
                <img src="images/comunc.png" class="img-fluid" alt="Responsive image">
            </div>
        </div>


    </div>


@endsection
