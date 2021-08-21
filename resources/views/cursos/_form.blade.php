<div class="container">
    <div class="row">

        <div class="col-12 text-left offset-lg-3 col-lg-6">
            <label for="formFile" class="form-label">Imagen curso</label>
            <input name="imagen_curso"class="form-control" type="file" id="formFile">
          </div>

        <div class="col-12 text-left offset-lg-3 col-lg-6">
            <label>
                Fecha de curso
                <input class="form-control  mb-3" type="date" name="fecha" placeholder="Fecha curso..." value="{{ old('fecha', $curso->fecha)}}">
            </label>
        </div>
        <div class="col-12">
            <input class="form-control offset-lg-3 col-lg-6 mb-3" name="docente" placeholder="Docente que impartira..." value="{{ old('docente', $curso->docente)}}">
        </div>
        <div class="col-12">
            <input class="form-control offset-lg-3 col-lg-6 mb-3" name="nombre_curso" placeholder="Nombre curso..." value="{{ old('nombre_curso', $curso->nombre_curso)}}">
        </div>
        <div class="col-12">
           <label for="dirigido_id"></label>
            <select
                name="dirigido_id"
                id="dirigido_id"
                class="form-control offset-lg-6 col-lg-6 mb-3"
                >
                <option value="">Dirigido</option>
                @foreach ($dirigidos as $id => $name)

                    <option value="{{$id}}" @if ($id===$curso->dirigido_id) selected @endif
                    >{{$name}}</option>


                @endforeach
            </select>
        </div>
        <div class="col-6 ml-2">
            <input class="form-control offset-lg-6 col-lg-6 mb-3" name="horas_curso" placeholder="Horas curso..." value="{{ old('horas_curso', $curso->horas_curso)}}">
        </div>
        <div class="col-5 ml-4">
            <input class="form-control offset col-lg-6 mb-3" type="date" name="fecha_limite" placeholder="Fecha limite registro..." value="{{ old('fecha_limite', $curso->fecha_limite)}}">
        </div>
        <div class="col-12">
            <input class="form-control offset-lg-3 col-lg-6 mb-3" name="materia" placeholder="Materia..." value="{{ old('materia', $curso->materia)}}">
        </div>
        <div class="col-12">
            <input class="form-control offset-lg-3 col-lg-6 mb-3" name="vigencia" placeholder="Vigencia..." value="{{ old('vigencia', $curso->vigencia)}}">
        </div>
        <div class="col-12">
            <input class="form-control offset-lg-3 col-lg-6 mb-3" name="videoconferencia" placeholder="Link videoconferencia..." value="{{ old('videoconferencia', $curso->videoconferencia)}}">
        </div>
        <div class="col-12">
            <input class="form-control offset-lg-3 col-lg-6 mb-3" name="drive" placeholder="Link drive..." value="{{ old('drive', $curso->drive)}}">
        </div>

    </div>
</div>
