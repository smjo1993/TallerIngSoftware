<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\TrabajoTitulacionStoreRequest;
use App\Http\Requests\TrabajoTitulacionUpdateRequest;

use App\Http\Controllers\Controller;

use App\TrabajoTitulacion;
use App\ActividadTitulacion;
use App\Academico;
use App\Estudiante;
use App\OrganizacionExterna;
use DB;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $trabajo_titulacions = TrabajoTitulacion::orderBy('id', 'DESC')
        ->numero()
        ->where('estado','ACEPTADA')
        ->paginate(10);
        return view('admin.carreras.index', compact('trabajo_titulacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrabajoTitulacionUpdateRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trabajo_titulacion = TrabajoTitulacion::find($id);
        $profesor_guia = Academico::find($trabajo_titulacion->id_academico);
        $actividad = ActividadTitulacion::find($trabajo_titulacion->id_actividad);
        $organizacion = OrganizacionExterna::find($trabajo_titulacion->id_organizacion);
        $actividad_titulacions = ActividadTitulacion::orderBy('nombre', 'ASC')
        ->pluck('nombre', 'id','comision','cant_estudiante');

        $academicos = Academico::orderBy('nombre', 'ASC')
        ->pluck('nombre','id');

        $estudiantes = Estudiante::orderBy('nombre','ASC')
        ->pluck('nombre', 'id',);

        $organizaciones = OrganizacionExterna::orderBy('nombre','ASC')
        ->pluck('nombre','id');
        return view('admin.carreras.show', compact('organizacion','actividad','profesor_guia','trabajo_titulacion','actividad_titulacions','academicos','estudiantes','organizaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,TrabajoTitulacionUpdateRequest $requestUpdate, $id)
    {
        $trabajo_titulacion = TrabajoTitulacion::find($id);
        $numero = $request->get('numero');
        $trabajo_titulacion->numero = $numero;
        $trabajo_titulacion->save();

        $trabajo_titulacions = TrabajoTitulacion::orderBy('id', 'DESC')
        ->numero()
        ->where('estado','ACEPTADA')
        ->paginate(10);

        return view('admin.carreras.index', compact('trabajo_titulacions'));
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrabajoTitulacionUpdateRequest $request, $id)
    {
    }
}