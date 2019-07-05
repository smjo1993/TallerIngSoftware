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

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $trabajo_titulacions = TrabajoTitulacion::orderBy('id', 'DESC')
        ->poseenumero()
        ->where('estado','ACEPTADA')
        ->paginate(10);
        return view('admin.tutors.index', compact('trabajo_titulacions'));
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
    //aca tienes que trabajar luciano
    public function show($id)
    {
        $trabajo_titulacion = TrabajoTitulacion::find($id);
        $actividad_titulacions = ActividadTitulacion::orderBy('nombre', 'ASC')
        ->pluck('nombre', 'id','comision','cant_estudiante');

        $academicos = Academico::orderBy('nombre', 'ASC')
        ->pluck('nombre','id');

        $estudiantes = Estudiante::orderBy('nombre','ASC')
        ->pluck('nombre', 'id',);

        $organizaciones = OrganizacionExterna::orderBy('nombre','ASC')
        ->pluck('nombre','id');
        return view('admin.tutors.show', compact('trabajo_titulacion','actividad_titulacions','academicos','estudiantes','organizaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */

    //aca se creara la comision(aca haces los metodos de redireccion puga)
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
    //aca haces que la comision se agregue al trabajo puga
    public function update(TrabajoTitulacionUpdateRequest $request, $id)
    {
                $trabajo_titulacion = TrabajoTitulacion::find($id);
        $estado = 'FINALIZADA';
        $trabajo_titulacion->estado = $estado;
        $trabajo_titulacion->save();
        $nota = $request->get('nota');
        $trabajo_titulacion->nota = $nota;
        $trabajo_titulacion->save();    
        $fecha_examen_titulo = $request->get('fecha_examen_titulo');
        $trabajo_titulacion->fecha_examen_titulo = $fecha_examen_titulo;
        $trabajo_titulacion->save();

        $trabajo_titulacions = TrabajoTitulacion::orderBy('id', 'DESC')
        ->poseenumero()
        ->where('estado','ACEPTADA')
        ->paginate(10);
        return view('admin.tutors.index', compact('trabajo_titulacions'));
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    //esto quedara como el anular en caso de problemas de redireccion
    public function destroy(TrabajoTitulacionUpdateRequest $request, $id)
    {
    }
}