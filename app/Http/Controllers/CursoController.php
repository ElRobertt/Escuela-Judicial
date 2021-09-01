<?php

namespace App\Http\Controllers;

use App\Curso;
use App\UsersInCursos;
use App\Dirigido;
use App\Http\Requests\SaveCursoRequest;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CursoController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');


    }
    public function index()
    {

        $curso=Curso::latest()->paginate();
        return view('cursos.index', compact('curso'));
    }

    public function show($id)
    {

        return view('cursos.show', [
            'curso'=>Curso::findOrFail($id),
            'users'=> Curso::find($id)->userCurso,
            'contador'=> Curso::withCount(['userCurso'])->find($id),
            'dirigidos'=> Dirigido::pluck('name', 'id')
        ]);
    }

    public function create()
    {

        return view('cursos.create',[
            'curso'=> new Curso,
            'dirigidos'=> Dirigido::pluck('name', 'id')
        ]);
    }

    public function store(SaveCursoRequest $request)
    {
        $curso=new Curso( $request->validated());

        $curso->imagen_curso=$request->file('imagen_curso')->store('imagenes');

        $curso->save();

        return redirect()->route('curso.index');

    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', [
            'curso'=> $curso,
            'dirigidos'=> Dirigido::pluck('name', 'id')
        ]);
    }

    public function update(Curso $curso, SaveCursoRequest $request)
        {
            if($request->hasFile('imagen_curso')){
                Storage::delete($curso->imagen_curso);

                $curso->fill( $request->validated());

                $curso->imagen_curso=$request->file('imagen_curso')->store('imagenes');

                $curso->save();

            } else{
                $curso->update(array_filter($request->validated()));
            }


            return redirect()->route('curso.show', $curso);
        }

    public function destroy(Curso $curso)
    {
        Storage::delete($curso->imagen_curso);
        $curso->delete();
        return redirect()->route('curso.index');
    }
   public function inscribirse()
    {
        $msg=[
            'name'=>request('name'),
            'nombre_curso'=>request('nombre_curso'),
            'fecha'=>request('fecha'),
            'drive'=>request('drive'),
            'videoconferencia'=>request('videoconferencia'),
        ];

        $correo= [
            'email'=>request('email'),
        ];

        UsersInCursos::create([
            'user_id'=>request('user_id'),
            'curso_id'=>request('curso_id'),
            'completado'=>request('completado'),

        ]);

        Mail::to($correo)->send(new MessageReceived ($msg));


     return redirect()->route('curso.index');
    }
    public function actualizar(UsersInCursos $user)
        {
            $user->update([
                'completado'=>request('completado')
            ]);

            return redirect()->route('curso.show', $user->curso_id);
        }

}
