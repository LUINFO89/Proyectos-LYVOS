<?php

namespace App\Http\Controllers;

use App\Models\Solicitude;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\See;
use Solicitudes;
use PDF;

/**
 * Class SolicitudeController
 * @package App\Http\Controllers
 */
class SolicitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitude::paginate();

        return view('solicitude.index', compact('solicitudes'))
            ->with('i', (request()->input('page', 1) - 1) * $solicitudes->perPage());
    }
    public function downloadPdf()
    {
        $solicitudes = Solicitude::paginate();

        view()->share('solicitude.pdf', $solicitudes);


        $pdf = PDF::loadView('solicitude.pdf', ['solicitudes' => $solicitudes]);
        
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitude = new Solicitude();
        return view('solicitude.create', compact('solicitude'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Solicitude::$rules);
        //$solicitud = new Solicitude();
        //$solicitud ->  TipoIdentificacionSolicitud  = $request ->  TipoIdentificacionSolicitud ;
        //$solicitud ->   DocumentoIdentidadSolicitud   = $request ->   DocumentoIdentidadSolicitud  ;


        $solicitude = Solicitude::create($request->all());

        //return $solicitude ;
        redirect()->route('solicitudes.index')
         ->with('success', 'Solicitude created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitude = Solicitude::find($id);

        return view('solicitude.show', compact('solicitude'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitude = Solicitude::find($id);

        return view('solicitude.edit', compact('solicitude'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Solicitude $solicitude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitude $solicitude)
    {
        request()->validate(Solicitude::$rules);

        $solicitude->update($request->all());

        return redirect()->route('solicitudes.index')
            ->with('success', 'Solicitude updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitude = Solicitude::find($id)->delete();

        return redirect()->route('solicitudes.index')
            ->with('success', 'Solicitude deleted successfully');
    }
}
