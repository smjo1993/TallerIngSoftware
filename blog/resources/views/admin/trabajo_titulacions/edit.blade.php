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
                    

                </div>
                &nbsp
                <div class="panel-body">
                {!! Form::model($trabajo_titulacion, ['route' => ['trabajo_titulacions.update', $trabajo_titulacion->id],
                    'method' => 'PUT']) !!}
                    <div class="form-group">
                        <p><strong>Titulo Trabajo Titulación:</strong></p>
                        <p>{{ $trabajo_titulacion->nombre }} </p>
                    </div>
                    <div class="form-group"  style="display:none">
                        {{ Form::label('nombre', 'Titulo Trabajo Titulación') }}
                        {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre' ,'readonly']) }}
                    </div>
                    <div class="form-group">
                        <p><strong>Profesor Guía:</strong></p>
                        <p>{{ $academico->nombre }} {{ $academico->apellido_paterno }} {{ $academico->apellido_materno }}</p>
                    </div>
                    <div class="form-group" style="display:none">
                        {{ Form::label('id_academico' , 'Profesor Guía') }}
                        {{ Form::select('id_academico' , $academicos, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    &nbsp
                    <!--primera corrida-->
                    <table>
                    <tr>    
                    <td>             
                    <div class="form-group" onchange="Metodo1();">
                        {{ Form::label('rut_academico1' , 'Rut Profesor') }}
                        {{ Form::select('rut_academico1' , $academicos_rut, null, ['class' => 'form-control']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_academico1' , 'Profesor Corrector') }}
                        {{ Form::select('id_academico1' , $academicos, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_paterno1' , 'Apellido Paterno ') }}
                        {{ Form::select('id_apellido_paterno1' , $academicos_paterno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_materno1' , 'Apellido Materno ') }}
                        {{ Form::select('id_apellido_materno1' , $academicos_materno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    </tr>
                    </table>
                    <!--segunda corrida-->
                    @if($actividad_titulacion->comision=="NO")
                    <table>
                    <tr>    
                    <td> 
                    <div class="form-group" onchange="Metodo2();">
                        {{ Form::label('rut_academico2' , 'Rut Profesor') }}
                        {{ Form::select('rut_academico2' , $academicos_rut, null, ['class' => 'form-control']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_academico2' , 'Profesor Corrector') }}
                        {{ Form::select('id_academico2' , $academicos, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_paterno2' , 'Apellido Paterno ') }}
                        {{ Form::select('id_apellido_paterno2' , $academicos_paterno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    <td>
                    <div class="form-group">
                        {{ Form::label('id_apellido_materno2' , 'Apellido Materno ') }}
                        {{ Form::select('id_apellido_materno2' , $academicos_materno, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    </td>
                    </tr>
                    </table>
                    @endif
                    @if($actividad_titulacion->comision=="SI")
                    <div class="form-group"style="display:none">
                        {{ Form::label('id_organizacion', 'Tutor Organizacion Externa') }}
                        {{ Form::select('id_organizacion' , $organizaciones, null, ['class' => 'form-control','readonly']) }}
                    </div>
                    <div class="form-group">
                        <p><strong>Tutor Organizacion Externa:</strong></p>
                        <p>{{ $organizacion->nombre_tutor }} </p>
                    </div>
                    @endif
                    <br>
                    <br>
                    <div class="form-group">
                        {{ Form::submit('Autorizar', ['class' => 'btn btn-sm btn-primary btn-autorizar'] ) }}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            &nbsp
        </div>
    </div>
</div>

</body>
</html>
<script src="{{ asset('js/script.js') }}"></script>
<script>
function Metodo1(){
    var value =  document.getElementById("rut_academico1").value;
    var selected = rut_academico1.options[rut_academico1.selectedIndex].text;
    document.getElementById("id_academico1").selectedIndex = value-1;
    document.getElementById("id_apellido_paterno1").selectedIndex = value-1;
    document.getElementById("id_apellido_materno1").selectedIndex = value-1;
 }
 function Metodo2(){
    var value =  document.getElementById("rut_academico2").value;
    var selected = rut_academico2.options[rut_academico2.selectedIndex].text;
    document.getElementById("id_academico2").selectedIndex = value-1;
    document.getElementById("id_apellido_paterno2").selectedIndex = value-1;
    document.getElementById("id_apellido_materno2").selectedIndex = value-1;
 }
</script>
@endsection