@extends('layouts.app')
<nav class="navbar navbar-expand-md navbar-dark sticky-top"
    style="background-color: #23415B;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ URL::asset('img/logo.png') }}" width="80" height="80" alt="" >
                <span class="navbar-text"style=color:white;font-family:Verdana;font-size:17px;>
                        &nbsp &nbsp Universidad Catolica del Norte
                      </span>
                 
            <button class="navbar-toggler" type ="button" data-toggle="collapse" 
                data-target="#navbarResponsive">
                <span class = "navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class nav-link href="{{ route('estudiantes.index') }}">Estudiantes</a>
                         
                    </li>
                    &nbsp
                    <li class="nav-item">
                        <a class nav-link href="{{ route('academicos.index') }}">Académicos</a>
                    </li>
                    &nbsp
                    <li class="nav-item">
                        <a class nav-link href="{{ route('actividad_titulacions.index') }}">Actividad Titulación</a>
                    </li>
                    &nbsp
                    <li class="nav-item">
                        <a class nav-link href="{{ route('trabajo_titulacions.index') }}">Trabajo Titulación</a>
                    </li>
                    &nbsp
                    <li class="nav-item">
                        <a class nav-link href="{{ route('organizacion_externas.index') }}">Anular Trabajo Titulación</a>
                    </li>
                    &nbsp
                    <li class="nav-item">
                        <a class nav-link href="{{ route('carreras.index') }}">Inscripción Formal</a>
                    </li>
                    &nbsp
                    <li class="nav-item">
                        <a class nav-link href="{{ route('tutors.index') }}">Registrar Examen de Título</a>
                    </li>
               </ul> 
            </div>
        
            </a>
        </div>


    </nav>
@section('content')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Memorias ucn</title>
</head>
<body style="background-color: #EDE9E3;">




    <nav class="navbar fixed-bottom navbar-expand-md navbar-light"style="background-color: #23415B;">
            <a class="navbar-brand" href="#"></a>
    </nav>

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-panel-default">
            &nbsp
                <div class="panel-heading">
                    Crear Trabajo Titulación
                    &nbsp
                    <br>
                    <br>
                    <a href="{{route('academicos.create')}}" class="btn btn-sm btn-primary pull-right"> Crear Academico</a>
                    &nbsp
                    <a href="{{route('estudiantes.create')}}" class="btn btn-sm btn-primary pull-right"> Crear Estudiante </a>
                </div>
                &nbsp
                <div class="panel-body">

                    {!! Form::open(['route' => 'trabajo_titulacions.store']) !!}
                    
                    <div class="form-group">
                        {{ Form::label('nombre', 'Titulo Trabajo Titulación') }}
                        {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre' ]) }}
                    </div>
                    <div class="form-group" onchange="getValue();">
                        {{ Form::label('id_actividad' , 'Actividad') }}
                        {{ Form::select('id_actividad' , $actividad_titulacions, null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group" style="display:none">
                        {{ Form::label('id_actividad2' , 'Comisión') }}
                        {{ Form::select('id_actividad2' , $actividad_titulacions2, null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group" style="display:none">
                        {{ Form::label('id_actividad3' , 'Estudiantes') }}
                        {{ Form::select('id_actividad3' , $actividad_titulacions3, null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group" style="display:none">
                        {{ Form::label('id_organizacion' , 'Estudiaorganizacionntes') }}
                        {{ Form::select('id_organizacion' , $organizaciones, null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('id_academico' , 'Profesor Guía') }}
                        {{ Form::select('id_academico' , $academicos, null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('fecha_inicio' , 'Fecha de Inicio de la Actividad') }}
                        {{Form::date('fecha_inicio', \Carbon\Carbon::now(), array('class' => 'form-control', 'required' => '')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('fecha_termino' , 'Fecha de Termino de la Actividad') }}
                        {{Form::date('fecha_termino', \Carbon\Carbon::now(), array('class' => 'form-control', 'required' => '')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('nombre_organizacion', 'Organización Externa') }}
                        {{ Form::text('nombre_organizacion', null, ['class' => 'form-control', 'id' => 'nombre_organizacion' ]) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('nombre_tutor', 'Tutor de la Organización') }}
                        {{ Form::text('nombre_tutor', null, ['class' => 'form-control', 'id' => 'nombre_tutor' ]) }}
                    </div>

                    <!--primer estudiante-->
                    <table>
                    <tr>    
                    <td>             
                    <div class="form-group" onchange="Sincronizar1();">
                        {{ Form::label('rut_estudiante' , 'Rut Alumno') }}
                        {{ Form::select('rut_estudiante' , $rut_estudiantes, null, ['class' => 'form-control']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group" >
                        {{ Form::label('id_estudiante' , 'Nombre Estudiante') }}
                        {{ Form::select('id_estudiante' , $estudiantes, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_paterno' , 'Apellido Paterno ') }}
                        {{ Form::select('id_apellido_paterno' , $estudiantes_apellido_paterno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_materno' , 'Apellido Materno ') }}
                        {{ Form::select('id_apellido_materno' , $estudiantes_apellido_materno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    </tr>
                    </table>

                    <!--segundo estudiante-->
                    <table>
                    <tr>    
                    <td>             
                    <div class="form-group" onchange="Sincronizar2();">
                        {{ Form::label('rut_estudiante2' , 'Rut Alumno') }}
                        {{ Form::select('rut_estudiante2' , $rut_estudiantes, null, ['class' => 'form-control']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group" >
                        {{ Form::label('id_estudiante2' , 'Nombre Estudiante') }}
                        {{ Form::select('id_estudiante2' , $estudiantes, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_paterno2' , 'Apellido Paterno ') }}
                        {{ Form::select('id_apellido_paterno2' , $estudiantes_apellido_paterno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_materno2' , 'Apellido Materno ') }}
                        {{ Form::select('id_apellido_materno2' , $estudiantes_apellido_materno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    </tr>
                    </table>

                    <!--tercer estudiante-->
                    <table>
                    <tr>    
                    <td>             
                    <div class="form-group" onchange="Sincronizar3();">
                        {{ Form::label('rut_estudiante3' , 'Rut Alumno') }}
                        {{ Form::select('rut_estudiante3' , $rut_estudiantes, null, ['class' => 'form-control']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group" >
                        {{ Form::label('id_estudiante3' , 'Nombre Estudiante') }}
                        {{ Form::select('id_estudiante3' , $estudiantes, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_paterno3' , 'Apellido Paterno ') }}
                        {{ Form::select('id_apellido_paterno3' , $estudiantes_apellido_paterno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_materno3' , 'Apellido Materno ') }}
                        {{ Form::select('id_apellido_materno3' , $estudiantes_apellido_materno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    </tr>
                    </table>

                    <!--cuarto estudiante-->
                    <table>
                    <tr>    
                    <td>             
                    <div class="form-group" onchange="Sincronizar4();">
                        {{ Form::label('rut_estudiante4' , 'Rut Alumno') }}
                        {{ Form::select('rut_estudiante4' , $rut_estudiantes, null, ['class' => 'form-control']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group" >
                        {{ Form::label('id_estudiante4' , 'Nombre Estudiante') }}
                        {{ Form::select('id_estudiante4' , $estudiantes, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_paterno4' , 'Apellido Paterno ') }}
                        {{ Form::select('id_apellido_paterno4' , $estudiantes_apellido_paterno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_materno4' , 'Apellido Materno ') }}
                        {{ Form::select('id_apellido_materno4' , $estudiantes_apellido_materno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    </tr>
                    </table>
                    <!--quinto estudiante-->
                    <table>
                    <tr>    
                    <td>             
                    <div class="form-group" onchange="Sincronizar5();">
                        {{ Form::label('rut_estudiante5' , 'Rut Alumno') }}
                        {{ Form::select('rut_estudiante5' , $rut_estudiantes, null, ['class' => 'form-control']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group" >
                        {{ Form::label('id_estudiante5' , 'Nombre Estudiante') }}
                        {{ Form::select('id_estudiante5' , $estudiantes, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_paterno5' , 'Apellido Paterno ') }}
                        {{ Form::select('id_apellido_paterno5' , $estudiantes_apellido_paterno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_materno5' , 'Apellido Materno ') }}
                        {{ Form::select('id_apellido_materno5' , $estudiantes_apellido_materno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    </tr>
                    </table>
                    <br>
                    <br>
                    <div class="form-group">
                        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'] ) }}
                    </div>

                    @include('admin.trabajo_titulacions.partials.form')
                    
                  {!! Form::close() !!}

                </div>
            </div>
            &nbsp
        </div>
    </div>
</div>
    </body>
</html>
<script>
function getValue(){
   var value =  document.getElementById("id_actividad").value;
   var selected = id_actividad.options[id_actividad.selectedIndex].text;

   document.getElementById("id_actividad2").selectedIndex = value-1;
   document.getElementById("id_actividad3").selectedIndex = value-1;

   var value2 =  document.getElementById("id_actividad2").value;
   var comision = id_actividad2.options[id_actividad2.selectedIndex].text;
   var value3 =  document.getElementById("id_actividad3").value;
   var estudiantes = id_actividad3.options[id_actividad3.selectedIndex].text;
   
   if(comision == "SI"){
       document.getElementById('nombre_organizacion').style.display = 'block';
       document.getElementById('nombre_tutor').style.display = 'block';
   }else{
       document.getElementById('nombre_organizacion').style.display = 'none';
       document.getElementById('nombre_tutor').style.display = 'none';
   }
   if(estudiantes == 1){
    document.getElementById('id_estudiante2').style.display = 'none';
    document.getElementById('id_estudiante3').style.display = 'none';
    document.getElementById('id_estudiante4').style.display = 'none';
    document.getElementById('id_estudiante5').style.display = 'none';
    document.getElementById('rut_estudiante2').style.display = 'none';
    document.getElementById('rut_estudiante3').style.display = 'none';
    document.getElementById('rut_estudiante4').style.display = 'none';
    document.getElementById('rut_estudiante5').style.display = 'none';
    document.getElementById('id_apellido_paterno2').style.display = 'none';
    document.getElementById('id_apellido_paterno3').style.display = 'none';
    document.getElementById('id_apellido_paterno4').style.display = 'none';
    document.getElementById('id_apellido_paterno5').style.display = 'none';
    document.getElementById('id_apellido_materno2').style.display = 'none';
    document.getElementById('id_apellido_materno3').style.display = 'none';
    document.getElementById('id_apellido_materno4').style.display = 'none';
    document.getElementById('id_apellido_materno5').style.display = 'none';
   }
   if(estudiantes == 2){
    document.getElementById('id_estudiante2').style.display = 'block';
    document.getElementById('id_estudiante3').style.display = 'none';
    document.getElementById('id_estudiante4').style.display = 'none';
    document.getElementById('id_estudiante5').style.display = 'none';
    document.getElementById('rut_estudiante2').style.display = 'block';
    document.getElementById('rut_estudiante3').style.display = 'none';
    document.getElementById('rut_estudiante4').style.display = 'none';
    document.getElementById('rut_estudiante5').style.display = 'none';
    document.getElementById('id_apellido_paterno2').style.display = 'block';
    document.getElementById('id_apellido_paterno3').style.display = 'none';
    document.getElementById('id_apellido_paterno4').style.display = 'none';
    document.getElementById('id_apellido_paterno5').style.display = 'none';
    document.getElementById('id_apellido_materno2').style.display = 'block';
    document.getElementById('id_apellido_materno3').style.display = 'none';
    document.getElementById('id_apellido_materno4').style.display = 'none';
    document.getElementById('id_apellido_materno5').style.display = 'none';
   }
   if(estudiantes == 3){
    document.getElementById('id_estudiante2').style.display = 'block';
    document.getElementById('id_estudiante3').style.display = 'block';
    document.getElementById('id_estudiante4').style.display = 'none';
    document.getElementById('id_estudiante5').style.display = 'none';
    document.getElementById('rut_estudiante2').style.display = 'block';
    document.getElementById('rut_estudiante3').style.display = 'block';
    document.getElementById('rut_estudiante4').style.display = 'none';
    document.getElementById('rut_estudiante5').style.display = 'none';
    document.getElementById('id_apellido_paterno2').style.display = 'block';
    document.getElementById('id_apellido_paterno3').style.display = 'block';
    document.getElementById('id_apellido_paterno4').style.display = 'none';
    document.getElementById('id_apellido_paterno5').style.display = 'none';
    document.getElementById('id_apellido_materno2').style.display = 'block';
    document.getElementById('id_apellido_materno3').style.display = 'block';
    document.getElementById('id_apellido_materno4').style.display = 'none';
    document.getElementById('id_apellido_materno5').style.display = 'none';
   }
   if(estudiantes == 4){
    document.getElementById('id_estudiante2').style.display = 'block';
    document.getElementById('id_estudiante3').style.display = 'block';
    document.getElementById('id_estudiante4').style.display = 'block';
    document.getElementById('id_estudiante5').style.display = 'none';
    document.getElementById('rut_estudiante2').style.display = 'block';
    document.getElementById('rut_estudiante3').style.display = 'block';
    document.getElementById('rut_estudiante4').style.display = 'block';
    document.getElementById('rut_estudiante5').style.display = 'none';
    document.getElementById('id_apellido_paterno2').style.display = 'block';
    document.getElementById('id_apellido_paterno3').style.display = 'block';
    document.getElementById('id_apellido_paterno4').style.display = 'block';
    document.getElementById('id_apellido_paterno5').style.display = 'none';
    document.getElementById('id_apellido_materno2').style.display = 'block';
    document.getElementById('id_apellido_materno3').style.display = 'block';
    document.getElementById('id_apellido_materno4').style.display = 'block';
    document.getElementById('id_apellido_materno5').style.display = 'none';
   }
   if(estudiantes == 5){
    document.getElementById('id_estudiante2').style.display = 'block';
    document.getElementById('id_estudiante3').style.display = 'block';
    document.getElementById('id_estudiante4').style.display = 'block';
    document.getElementById('id_estudiante5').style.display = 'block';
    document.getElementById('rut_estudiante2').style.display = 'block';
    document.getElementById('rut_estudiante3').style.display = 'block';
    document.getElementById('rut_estudiante4').style.display = 'block';
    document.getElementById('rut_estudiante5').style.display = 'block';
    document.getElementById('id_apellido_paterno2').style.display = 'block';
    document.getElementById('id_apellido_paterno3').style.display = 'block';
    document.getElementById('id_apellido_paterno4').style.display = 'block';
    document.getElementById('id_apellido_paterno5').style.display = 'block';
    document.getElementById('id_apellido_materno2').style.display = 'block';
    document.getElementById('id_apellido_materno3').style.display = 'block';
    document.getElementById('id_apellido_materno4').style.display = 'block';
    document.getElementById('id_apellido_materno5').style.display = 'block';
   }
}
function Sincronizar1(){
   var value =  document.getElementById("rut_estudiante").value;
   var selected = rut_estudiante.options[rut_estudiante.selectedIndex].text;
   console.log(value+" "+selected);
   document.getElementById("id_estudiante").selectedIndex = value-1;
   document.getElementById("id_apellido_paterno").selectedIndex = value-1;
   document.getElementById("id_apellido_materno").selectedIndex = value-1;
}
function Sincronizar2(){
   var value =  document.getElementById("rut_estudiante2").value;
   var selected = rut_estudiante2.options[rut_estudiante2.selectedIndex].text;
   document.getElementById("id_estudiante2").selectedIndex = value-1;
   document.getElementById("id_apellido_paterno2").selectedIndex = value-1;
   document.getElementById("id_apellido_materno2").selectedIndex = value-1;
}
function Sincronizar3(){
   var value =  document.getElementById("rut_estudiante3").value;
   var selected = rut_estudiante3.options[rut_estudiante3.selectedIndex].text;
   document.getElementById("id_estudiante3").selectedIndex = value-1;
   document.getElementById("id_apellido_paterno3").selectedIndex = value-1;
   document.getElementById("id_apellido_materno3").selectedIndex = value-1;
}
function Sincronizar4(){
   var value =  document.getElementById("rut_estudiante4").value;
   var selected = rut_estudiante4.options[rut_estudiante4.selectedIndex].text;
   document.getElementById("id_estudiante4").selectedIndex = value-1;
   document.getElementById("id_apellido_paterno4").selectedIndex = value-1;
   document.getElementById("id_apellido_materno4").selectedIndex = value-1;
}
function Sincronizar5(){
   var value =  document.getElementById("rut_estudiante5").value;
   var selected = rut_estudiante5.options[rut_estudiante5.selectedIndex].text;
   document.getElementById("id_estudiante5").selectedIndex = value-1;
   document.getElementById("id_apellido_paterno5").selectedIndex = value-1;
   document.getElementById("id_apellido_materno5").selectedIndex = value-1;
}
</script>
@endsection