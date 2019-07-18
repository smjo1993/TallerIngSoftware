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
        $actividad_titulacions = ActividadTitulacion::orderBy('id', 'ASC')
        ->pluck('nombre', 'id');

        $actividad_titulacions2 = ActividadTitulacion::orderBy('id', 'ASC')
        ->pluck('comision','id');

        $actividad_titulacions3 = ActividadTitulacion::orderBy('id', 'ASC')
        ->pluck('cant_estudiante','id');

        $academicos = Academico::orderBy('nombre', 'ASC')
        ->pluck('nombre','id');

        $estudiantes = Estudiante::orderBy('nombre','ASC')
        ->pluck('nombre', 'id',);

        $organizaciones = OrganizacionExterna::orderBy('nombre','ASC')
        ->pluck('nombre','id');

        return view('admin.trabajo_titulacions.create', compact('actividad_titulacions','actividad_titulacions2','actividad_titulacions3','academicos','estudiantes','organizaciones'));
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

        if($fecha_termino > $fecha_inicio){

            $trabajo = TrabajoTitulacion::create($request->all());
            $id_trabajo = $trabajo->id;
            $nombre_organizacion = $request->get('nombre_organizacion');
            $nombre_tutor = $request->get('nombre_tutor');

            //se crea la nueva organizacion
            if($nombre_organizacion && $nombre_tutor){
                $organizacion = DB::table('organizacion_externas')->insert([
                    'nombre'=>$nombre_organizacion,
                    'nombre_tutor'=>$nombre_tutor
                ]);
                /** 
                $id_organizacion = $organizacion->get('id');
                
                DB::table('trabajo_titulacions')->insert([
                    'id_organizacion'=>$id_organizacion
                ]);
                */
            }
            //estudiante1
            $primer_estudiante = $request->get('id_estudiante');
            if($primer_estudiante){
                DB::table('estudiante_trabajo_titulacion')->insert([
                    'estudiante_id'=>$primer_estudiante,
                    'trabajo_titulacion_id'=>$id_trabajo
                ]);
            }
            //estudiante2
            $segundo_estudiante = $request->get('id_estudiante2');
            if($segundo_estudiante){
                DB::table('estudiante_trabajo_titulacion')->insert([
                    'estudiante_id'=>$segundo_estudiante,
                    'trabajo_titulacion_id'=>$id_trabajo
                ]);
            }
            //estudiante3
            $tercer_estudiante = $request->get('id_estudiante3');
            if($tercer_estudiante){
                DB::table('estudiante_trabajo_titulacion')->insert([
                    'estudiante_id'=>$tercer_estudiante,
                    'trabajo_titulacion_id'=>$id_trabajo
                ]);
            }
            //estudiante4
            $cuarto_estudiante = $request->get('id_estudiante4');
            if($cuarto_estudiante){
                DB::table('estudiante_trabajo_titulacion')->insert([
                    'estudiante_id'=>$cuarto_estudiante,
                    'trabajo_titulacion_id'=>$id_trabajo
                ]);
            }
            //estudiante5
            $quinto_estudiante = $request->get('id_estudiante5');
            if($quinto_estudiante){
                DB::table('estudiante_trabajo_titulacion')->insert([
                    'estudiante_id'=>$quinto_estudiante,
                    'trabajo_titulacion_id'=>$id_trabajo
                ]);
            }


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
    public function show()
    {
        return view('admin.trabajo_titulacions.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */

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

    public function datos(){
        
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
        $estado = 'ACEPTADA';
        $trabajo_titulacion->estado = $estado;
        $trabajo_titulacion->save();
        $trabajo_titulacions = TrabajoTitulacion::orderBy('id', 'DESC')
        ->where('estado','INGRESADA')
        ->paginate(10);
        //return view('admin.trabajo_titulacions.index', compact('trabajo_titulacions'));
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