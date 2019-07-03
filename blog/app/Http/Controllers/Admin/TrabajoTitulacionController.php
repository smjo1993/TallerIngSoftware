<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\TrabajoTitulacionStoreRequest;
use App\Http\Requests\TrabajoTitulacionUpdateRequest;

use App\Http\Controllers\Controller;

use App\TrabajoTitulacion;
use App\ActividadTitulacion;
use App\Academico;
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
        ->pluck('nombre','rut');

        $var = 5;
        //return redirect()->route('trabajo_titulacions.seleccionaractividad');
        return view('admin.trabajo_titulacions.create', compact('actividad_titulacions','academicos','var'));
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
            $mensaje = "esta bien";
            return redirect()->route('trabajo_titulacions.create')
            ->with('info', $mensaje);
        }else{
            $mensaje = "esta mal";
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
    public function update(TrabajoTitulacionUpdateRequest $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function anular()
    {
        //return view('trabajo_titulacions.anular');
    }

    public function seleccionaractividad()
    {
        //return redirect()->route('trabajo_titulacions.seleccionaractividad');
        //return view('trabajo_titulacions.seleccionaractividad');
    }
}
