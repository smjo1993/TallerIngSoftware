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

class TrabajoTitulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //$nombre = $request->get('nombre');
        //$id    = $request->get('id');
      
        $trabajo_titulacions = TrabajoTitulacion::orderBy('id', 'DESC')
        ->where('estado','INGRESADA')
        ->paginate(10);
        return view('admin.trabajo_titulacions.index', compact('trabajo_titulacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividad_titulacions = ActividadTitulacion::orderBy('nombre', 'ASC')
        ->pluck('nombre', 'id','comision','cant_estudiante');

        $academicos = Academico::orderBy('nombre', 'ASC')
        ->pluck('nombre','id');

        $estudiantes = Estudiante::orderBy('nombre','ASC')
        ->pluck('nombre', 'id',);

        $organizaciones = OrganizacionExterna::orderBy('nombre','ASC')
        ->pluck('nombre','id');

        //$var = 5;
        //return redirect()->route('trabajo_titulacions.seleccionaractividad');
        return view('admin.trabajo_titulacions.create', compact('actividad_titulacions','academicos','estudiantes','organizaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrabajoTitulacionStoreRequest $request)
    {
        $fecha_inicio = $request->get('fecha_inicio');
        $fecha_termino = $request->get('fecha_termino');
        //$org_externa = $request->get('id_actividad')->organizacion($id_actividad);

        if($fecha_termino > $fecha_inicio){
          ////return redirect()->route('trabajo_titulacions.create')
            //->with('info', $org_externa);
            $trabajo = TrabajoTitulacion::create($request->all());

            //$trabajo->estudiantes()->attach($request->get('estudiantes'));

            return redirect()->route('trabajo_titulacions.index')
            ->with('info', 'Trabajo creado con exito');
        }else{
            $mensaje = "error en la fecha";
            return redirect()->route('trabajo_titulacions.create')
            ->with('info', $mensaje);
        }
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $trabajo_titulacion = TrabajoTitulacion::find($id);
        $actividad_titulacions = ActividadTitulacion::orderBy('nombre', 'ASC')
        ->pluck('nombre', 'id','comision','cant_estudiante');

        $academicos = Academico::orderBy('nombre', 'ASC')
        ->pluck('nombre','id');

        $estudiantes = Estudiante::orderBy('nombre','ASC')
        ->pluck('nombre', 'id',);

        $organizaciones = OrganizacionExterna::orderBy('nombre','ASC')
        ->pluck('nombre_tutor','id');
        return view('admin.trabajo_titulacions.edit', compact('trabajo_titulacion','actividad_titulacions','academicos','estudiantes','organizaciones'));
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
        $estado = 'ACEPTADA';
        $trabajo_titulacion->estado = $estado;
        $trabajo_titulacion->save();

 

        $trabajo_titulacions = TrabajoTitulacion::orderBy('id', 'DESC')
        ->where('estado','INGRESADA')
        ->paginate(10);
        return view('admin.trabajo_titulacions.index', compact('trabajo_titulacions'));
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