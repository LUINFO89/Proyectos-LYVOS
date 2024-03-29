<?php

namespace App\Http\Controllers;


use App\Models\Asignatura;
use Illuminate\Http\Request;
use App\Models\Profesore;
use PDF;


/**
 * Class AsignaturaController
 * @package App\Http\Controllers
 */
class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaturas = Asignatura::paginate();


        return view('asignatura.index', compact('asignaturas'))
            ->with('i', (request()->input('page', 1) - 1) * $asignaturas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignatura = new Asignatura();
        $profesor= Profesore::pluck('nombre_profesores','id');
        return view('asignatura.create', compact('asignatura','profesor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asignatura::$rules);

        $asignatura = Asignatura::create($request->all());

        return redirect()->route('asignaturas.index')
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
        $asignatura = Asignatura::find($id);


        return view('asignatura.show', compact('asignatura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignatura = Asignatura::find($id);
        $profesor= Profesore::pluck('nombre_profesores','id');


        return view('asignatura.edit', compact('asignatura','profesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asignatura $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignatura $asignatura)
    {
        request()->validate(Asignatura::$rules);

        $asignatura->update($request->all());

        return redirect()->route('asignaturas.index')
        ->with('Excelente', 'El objeto fue actualizado correctamente .');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asignatura = Asignatura::find($id)->delete();

        return redirect()->route('asignaturas.index')
        ->with('Excelente', 'El objeto fue eliminado correctamente .');
    }
    public function downloadPdf()
    {
        $obj = Asignatura::paginate();

       view()->share('asignatura.pdf',$obj);
       

        $pdf = PDF::loadView('asignatura.pdf', ['asignaturas' => $obj])->setPaper('a4', 'landscape');

        //return $pdf->download('alumnos.pdf');
        return $pdf->stream();
    }
}
