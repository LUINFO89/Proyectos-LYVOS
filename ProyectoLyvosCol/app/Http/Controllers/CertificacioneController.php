<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Certificacione;
use App\Models\Grado;
use Illuminate\Http\Request;

/**
 * Class CertificacioneController
 * @package App\Http\Controllers
 */
class CertificacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificaciones = Certificacione::paginate();

        return view('certificacione.index', compact('certificaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $certificaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $certificacione = new Certificacione();

        $alumnos = Alumno::pluck('documentoIdentidadAlumno', 'id');//sirve para mostrar el select del formulario
        $grado = Grado::pluck('nombreGrado', 'id');//sirve para mostrar el select del formulario

        return view('certificacione.create', compact('certificacione','alumnos','grado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Certificacione::$rules);

        $certificacione = Certificacione::create($request->all());

        return redirect()->route('certificaciones.index')
            ->with('success', 'Certificacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificacione = Certificacione::find($id);

        return view('certificacione.show', compact('certificacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificacione = Certificacione::find($id);
        $alumnos = Alumno::pluck('documentoIdentidadAlumno', 'id');//sirve para mostrar el select del formulario
        $grado = Grado::pluck('nombreGrado', 'id');//sirve para mostrar el select del formulario

        return view('certificacione.edit', compact('certificacione','alumnos','grado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Certificacione $certificacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificacione $certificacione)
    {
        request()->validate(Certificacione::$rules);

        $certificacione->update($request->all());

        return redirect()->route('certificaciones.index')
            ->with('success', 'Certificacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $certificacione = Certificacione::find($id)->delete();

        return redirect()->route('certificaciones.index')
            ->with('success', 'Certificacione deleted successfully');
    }
}
