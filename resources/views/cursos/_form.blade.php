<div class="container " style="padding:4em 2rem; margin-top:80px !important">
    <h3 >Ingresa los datos siguientes</h3>

    <div class="row">
        @if ($curso->imagen_curso)
                    <div class="col-12 col-1g-3 offset-lg-3">
                        <img class="card-img-top" style="max-height: 250px;max-width: 250px" src="/storage/{{$curso->imagen_curso}}" alt="{{$curso->nombre_curso}}">
                    </div>
        @endif

        <div class="col-12 text-left offset-lg-3 col-lg-3 mt-2">
            <label for="formFile" class="form-label">Imagen curso</label>
            <input id="formFiless98" name="imagen_curso"class="form-control" type="file" id="formFile">
            <img class="img-fluid img-thumbnail" style="max-height: 250px"  id="imgprew">

                                        <script>
                                            // Obtener referencia al input y a la imagen
                                    const $formFiless98 = document.querySelector("#formFiless98"),
                                    $imagenPrevisualizacion298 = document.querySelector("#imgprew");

                                    // Escuchar cuando cambie
                                    $formFiless98.addEventListener("change", () => {
                                    // Los archivos seleccionados, pueden ser muchos o uno
                                    const archivos = $formFiless98.files;
                                    // Si no hay archivos salimos de la función y quitamos la imagen
                                    if (!archivos || !archivos.length) {
                                        $imagenPrevisualizacion298.src = "";
                                        return;
                                    }
                                    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                                    const primerArchivo = archivos[0];
                                    // Lo convertimos a un objeto de tipo objectURL
                                    const objectURL = URL.createObjectURL(primerArchivo);
                                    // Y a la fuente de la imagen le ponemos el objectURL
                                    $imagenPrevisualizacion298.src = objectURL;

                                    });

                                        </script>
        </div>

        <div class="col-12 text-left offset-lg-0 col-lg-3 mt-2">
            <label class="form-label">Fecha del curso</label>
            <input class="form-control " type="date" name="fecha" placeholder="Fecha curso..." required class="form-control" value="{{ old('fecha', $curso->fecha)}}">

        </div>

    </div>
    <div class="row">
        <div class="col-12  text-left offset-lg-3 col-lg-3">
            <label for="dsc" class="form-label"> Docente</label>
            <input class="form-control offset-lg-0 col-lg-12 mb-3" name="docente" placeholder="Docente que impartira..." required value="{{ old('docente', $curso->docente)}}">
        </div>
        <div class="col-12 text-left offset-lg-0 col-lg-3">
            <label required for="dirigido_id"> Dirigido a</label>
             <select
                 name="dirigido_id"
                 id="dirigido_id"
                 class="form-control offset-lg-0 col-lg-12 mb-3"
                 >
                 <option value="">Dirigido</option>
                 @foreach ($dirigidos as $id => $name)

                     <option type="checkbox" value="{{$id}}" @if ($id===$curso->dirigido_id) selected @endif
                     >{{$name}}</option>


                 @endforeach
             </select>
         </div>


    </div>
    <div class="row">
        <div class="col-12 text-left offset-lg-3 col-lg-6">
            <label for="dsc" class="form-label"> Nombre del curso</label>
            <input class="form-control offset-lg-0 col-lg-12 mb-3" name="nombre_curso" placeholder="Nombre curso..." required value="{{ old('nombre_curso', $curso->nombre_curso)}}">
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-left offset-lg-3 col-lg-3">
            <label for="dsc" class="form-label"> Horas del curso</label>
            <input class="form-control offset-lg-0 col-lg-12 mb-3" name="horas_curso" placeholder="Horas curso..." value="{{ old('horas_curso', $curso->horas_curso)}}">
        </div>

        <div class="col-12 text-left offset-lg-0 col-lg-3">
            <label for="dsc" class="form-label"> Fecha limite de registro</label>
            <input class="form-control   offset-lg-0 col-lg-12 mb-3" type="date" name="fecha_limite" placeholder="Fecha limite registro..." value="{{ old('fecha_limite', $curso->fecha_limite)}}">
        </div>

    </div>

    <div class="row">
        <div class="col-12 text-left offset-lg-3 col-lg-3">
            <label for="dsc" class="form-label"> Asistentes</label>
            <input class="form-control offset-lg-0 col-lg-12 mb-3" name="vigencia" placeholder="Asistentes..." value="{{ old('vigencia', $curso->vigencia)}}">
        </div>
        <div class="col-12 text-left offset-lg-0 col-lg-3">
            <label for="dsc" class="form-label"> Materia</label>
            <input class="form-control offset-lg-0 col-lg-12 mb-3" name="materia" placeholder="Materia..." value="{{ old('materia', $curso->materia)}}">
        </div>

    </div>
    <div class="row">
        <div  class="col-12 text-left offset-lg-3 col-lg-6">
            <label for="dsc" class="form-label"> Link de la videoconferencia.</label>

            <input class="form-control offset-lg-0 col-lg-12 mb-3" name="videoconferencia" placeholder="Link videoconferencia..." value="{{ old('videoconferencia', $curso->videoconferencia)}}">
        </div>
    </div>
    <div class="row">
        <div  class="col-12 text-left offset-lg-3 col-lg-6">
            <label for="dsc" class="form-label"> Link del drive.</label>

            <input class="form-control offset-lg-0 col-lg-12 mb-3" name="drive" placeholder="Link drive..." value="{{ old('drive', $curso->drive)}}">
        </div>
    </div>
</div>
