<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\ActividadTitulacionStoreRequest;
use App\Http\Requests\ActividadTitulacionUpdateRequest;

use App\Http\Controllers\Controller;

use App\ActividadTitulacion;
class ActividadTitulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $nombre = $request->get('nombre');
        $id    = $request->get('id');
      
        $actividad_titulacions = ActividadTitulacion::orderBy('id', 'DESC')
        ->nombre($nombre)
        ->id($id)
        ->paginate(10);
        
        
        return view('admin.actividad_titulacions.index', compact('actividad_titulacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividad_titulacions = ActividadTitulacion::orderBy('id', 'ASC')->get();

        return view('admin.actividad_titulacions.create', compact('actividad_titulacions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActividadTitulacionStoreRequest $request)
    {
        $actividad_titulacion = ActividadTitulacion::create($request->all());

    

        return redirect()->route('actividad_titulacions.index', $actividad_titulacion->id)
        ->with('info', 'Actividad de Titulacion creada con exito');
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividad_titulacion = ActividadTitulacion::find($id);
        //$academico = Academico::find($id);

        return view('admin.actividad_titulacions.show', compact('actividad_titulacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividad_titulacion = ActividadTitulacion::find($id);
 

        return view('admin.actividad_titulacions.edit', compact('actividad_titulacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ActividadTitulacionUpdateRequest $request, $id)
    {
        $actividad_titulacion = ActividadTitulacion::find($id);

        $actividad_titulacion->fill($request->all())->save();

 

        return redirect()->route('actividad_titulacions.edit', $actividad_titulacion->id)
        ->with('info', 'Actividad de Titulacion actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad_titulacion = ActividadTitulacion::find($id)->delete();

        return back()->with('info', 'Eliminada correctamente');
    }
}
