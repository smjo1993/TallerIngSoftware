<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\AcademicoStoreRequest;
use App\Http\Requests\AcademicoUpdateRequest;
use App\Http\Controllers\Controller;

use App\Academico;
class AcademicoController extends Controller
{


    /** 
    *public function __construct()
    *{
    *   $this->middleware('auth');
    *}
    */
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('nombre');
        $rut    = $request->get('rut');

        $academicos = Academico::orderBy('id', 'DESC')
        ->nombre($nombre)
        ->rut($rut)
        ->paginate(10);

        return view('admin.academicos.index', compact('academicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academicos = Academico::orderBy('id', 'ASC')->get();

        return view('admin.academicos.create', compact('academicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcademicoStoreRequest $request)
    {


        $academico = Academico::create($request->all());

        $rut_verificar = $academico->rut;


        if($this->check($rut_verificar)==false){
            //Si el rut que acaba de ingresar el usuario es invalido, entonces destruimos el titulado que creamos arriba.
            $this->destroy($academico->id);
            return redirect()->route('academicos.create')
                ->with('info','Rut mal ingresado');
        }

        return redirect()->route('academicos.index', $academico->id)
        ->with('info', 'Academico creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academico = Academico::find($id);

        return view('admin.academicos.show', compact('academico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $academico = Academico::find($id);
 

        return view('admin.academicos.edit', compact('academico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademicoUpdateRequest $requestUpdate, $id)
    {
        if($request->ajax()){
        $academico = Academico::find($id);

        $academico->fill($request->all())->save();
        
        //return redirect()->route('academicos.edit', $academico->id)
        //->with('info', 'Academico actualizada con exito');
        return response()->json([
        ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if($request->ajax()){
            $academico = Academico::find($id)->delete();
            //return back()->with('info', 'Eliminado correctamente');
            return response()->json([
                //'message' => $estudiante->nombre . 'fue eliminado exitosamente'
            ]);
        }
    }

    public function check($rut) {

        $cleanedRut = $this->clean($rut);

        if (! $cleanedRut)
            return false;

        list($numero, $digitoVerificador) = explode('-', $cleanedRut);

        //Validamos requisitos m�nimos
        if ((($digitoVerificador != 'K') && (! is_numeric($digitoVerificador))) || (count(str_split($numero)) > 11))
            return false;

        //Validamos que todos los caracteres del n�mero sean d�gitos
        foreach(str_split($numero) as $chr) {
            if (! is_numeric($chr))
                return false;
        }

        //Calculamos el digito verificador
        $digit = $this->digitoVerificador($numero);

        //Comparamos el digito verificador calculado con el entregado
        if($digit == $digitoVerificador){
            return true;
        }else{
            return false;
        }
    }

    public function clean($originalRut, $incluyeDigitoVerificador = true) {

        //Eliminamos espacios al principio y final
        $originalRut = trim($originalRut);
        //En caso de existir, eliminamos ceros ("0") a la izquierda
        $originalRut = ltrim($originalRut, '0');
        $input		= str_split($originalRut);
        $cleanedRut	= '';
        foreach ($input as $key => $chr) {
            //Digito Verificador
            if ((($key + 1) == count($input)) && ($incluyeDigitoVerificador)){
                if (is_numeric($chr) || ($chr == 'k') || ($chr == 'K'))
                    $cleanedRut .= '-'.strtoupper($chr);
                else
                    return false;
            }
            //N�meros del RUT
            elseif (is_numeric($chr))
                $cleanedRut .= $chr;
        }

        if (strlen($cleanedRut) < 3)
            return false;

        return $cleanedRut;
    }

    public function digitoVerificador($rut) {
        //Preparamos el RUT recibido
        $numero = $this->clean($rut, false);
        //Calculamos el d�gito verificador
        $txt		= array_reverse(str_split($numero));
        $sum		= 0;
        $factors	= array(2,3,4,5,6,7,2,3,4,5,6,7);
        foreach($txt as $key => $chr) {
            $sum += $chr * $factors[$key];
        }

        $a			= $sum % 11;
        $b			= 11-$a;

        if($b == 11)
            $digitoVerificador	= 0;
        elseif($b == 10)
            $digitoVerificador	= 'K';
        else
            $digitoVerificador = $b;
        //Convertimos el n�mero a cadena para efectos de poder comparar
        $digitoVerificador = (string)$digitoVerificador;
        return $digitoVerificador;
    }

}
