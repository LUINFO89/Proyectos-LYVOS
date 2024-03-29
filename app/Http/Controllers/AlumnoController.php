<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Grado;
use App\Models\Certificacione;
use App\Models\Solicitude;
use PDF;

use Illuminate\Http\Request;

/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::paginate();

        return view('alumno.index', compact('alumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
    }

    public function downloadPdf()
    {
        $alumnos = Alumno::paginate();

       view()->share('alumno.pdf',$alumnos);
       

        $pdf = PDF::loadView('alumno.pdf', ['alumnos' => $alumnos])->setPaper('a4', 'landscape');

        //return $pdf->download('alumnos.pdf');
        return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = new Alumno();
        $grados = Grado::pluck('nombreGrado', 'id');//sirve para mostrar el select del formulario
        return view('alumno.create', compact('alumno','grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alumno::$rules);

        $alumno = Alumno::create($request->all());

        return redirect()->route('alumnos.index')
            ->with('Excelente', 'El objeto fue creado correctamente .');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);

        return view('alumno.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        $grados = Grado::pluck('nombreGrado', 'id');//sirve para mostrar el select del formulario


        return view('alumno.edit', compact('alumno','grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        request()->validate(Alumno::$rules);

        $alumno->update($request->all());

        return redirect()->route('alumnos.index')
        ->with('Excelente', 'El objeto fue Actualizado correctamente .');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id)->delete();

        return redirect()->route('alumnos.index')
        ->with('Excelente', 'El objeto fue Eliminado correctamente .');
    }
}
