<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Alumno;
use App\Models\Profesore;
use App\Models\Grado;
use App\Models\Asignatura;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\NotasImport;


/**
 * Class NotaController
 * @package App\Http\Controllers
 */
class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::paginate();

        return view('nota.index', compact('notas'))
            ->with('i', (request()->input('page', 1) - 1) * $notas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nota = new Nota();

        $estudiante_id = Alumno::pluck('documentoIdentidadAlumno','id');
        $estudiante = Alumno::pluck('nombresAlumno','id');
        $profesor= Profesore::pluck('nombre_profesores','id');
        $curso = Grado::pluck('nombreGrado','id');
        $asignatura = Asignatura::pluck('nombre_asignatura','id');
        return view('nota.create', compact('nota','estudiante','profesor','curso','asignatura','estudiante_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Nota::$rules);

        $nota = Nota::create($request->all());

        return redirect()->route('notas.index')
            ->with('success', 'Nota created Correctamente.');

    }

  /*  public function store(Request $request)
    {
        //$headings = (new HeadingRowImport)->toArray('C:/notas.xlsx');

        $file = $request->file('import_file');

        Excel::import(new NotasImport, $file);

        return redirect()->route('notas.index')->with('success', 'Productos importados exitosamente');
    }*/
    

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota = Nota::find($id);

        return view('nota.show', compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $estudiante_id = Alumno::pluck('documentoIdentidadAlumno','id');
        $estudiante = Alumno::pluck('nombresAlumno','id');
        $profesor= Profesore::pluck('nombre_profesores','id');
        $curso = Grado::pluck('nombreGrado','id');
        $asignatura = Asignatura::pluck('nombre_asignatura','id');
        $nota = Nota::find($id);

        return view('nota.edit', compact('nota','estudiante','profesor','curso','asignatura','estudiante_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Nota $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nota $nota)
    {
        request()->validate(Nota::$rules);

        $nota->update($request->all());

        return redirect()->route('notas.index')
            ->with('success', 'Nota updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nota = Nota::find($id)->delete();

        return redirect()->route('notas.index')
            ->with('success', 'Nota deleted successfully');
    }
}
