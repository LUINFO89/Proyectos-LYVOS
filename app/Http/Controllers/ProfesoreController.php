<?php

namespace App\Http\Controllers;

use App\Models\Profesore;
use Illuminate\Http\Request;
use PDF;

/**
 * Class ProfesoreController
 * @package App\Http\Controllers
 */
class ProfesoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesore::paginate();

        return view('profesore.index', compact('profesores'))
            ->with('i', (request()->input('page', 1) - 1) * $profesores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesore = new Profesore();
        return view('profesore.create', compact('profesore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Profesore::$rules);

        $profesore = Profesore::create($request->all());

        return redirect()->route('profesores.index')
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
        $profesore = Profesore::find($id);

        return view('profesore.show', compact('profesore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesore = Profesore::find($id);

        return view('profesore.edit', compact('profesore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Profesore $profesore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesore $profesore)
    {
        request()->validate(Profesore::$rules);

        $profesore->update($request->all());

        return redirect()->route('profesores.index')
        ->with('Excelente', 'El objeto fue actualizado correctamente .');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $profesore = Profesore::find($id)->delete();

        return redirect()->route('profesores.index')
        ->with('Excelente', 'El objeto fue eliminado correctamente .');
    }
    public function downloadPdf()
    {
        $profesores = Profesore::paginate();

       view()->share('profesor.pdf',$profesores);
       

        $pdf = PDF::loadView('profesore.pdf', ['profesores' => $profesores])->setPaper('a4', 'landscape');

        //return $pdf->download('alumnos.pdf');
        return $pdf->stream();
    }
}
