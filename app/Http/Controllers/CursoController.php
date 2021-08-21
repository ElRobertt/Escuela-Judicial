<?php

namespace App\Http\Controllers;

use App\Curso;
use App\UsersInCursos;
use App\Dirigido;
use App\Http\Requests\SaveCursoRequest;
use Illuminate\Http\Request;

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
            $curso->update($request->validated());

            return redirect()->route('curso.show', $curso);
        }

    public function destroy(Curso $curso)
    {

        $curso->delete();
        return redirect()->route('curso.index');
    }
   public function inscribirse()
    {
        UsersInCursos::create([
            'user_id'=>request('user_id'),
            'curso_id'=>request('curso_id'),

        ]);
      return redirect()->route('curso.index');
    }

}
