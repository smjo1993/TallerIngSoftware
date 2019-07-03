@extends('layouts.app')

<nav class="navbar navbar-expand-md navbar-dark sticky-top"
    style="background-color: #23415B;">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://www.ucn.cl/"><img src="img/logo.png" width="80" height="80" alt="">
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
                            <a class nav-link href="{{ route('academicos.index') }}">Academicos</a>
                    </li>
                    &nbsp
                    <li class="nav-item">
                        <a class nav-link href="{{ route('actividad_titulacions.index') }}">Actividad Titulacion</a>
                    </li>
                    &nbsp
                    <li class="nav-item">
                        <a class nav-link href="{{ route('trabajo_titulacions.index') }}">Tabajo Titulacion</a>
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

    <title>Memorias ucn</title>
</head>
<body style="background-color: #EDE9E3;">

    <nav class="navbar fixed-bottom navbar-expand-md navbar-light"style="background-color: #23415B;">
            <a class="navbar-brand" href="#"></a>
    </nav>  

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2"> 
<div class="panel panel-default">
<div class="datagrid">

&nbsp
                <h1>
                    Busqueda de academicos
                    {{ Form::open(['route' => 'academicos.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                        <div class="form-group">
                            {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                        </div>
                        &nbsp
                        <div class="form-group">
                            {{ Form::text('rut', null, ['class' => 'form-control', 'placeholder' => 'RUT']) }}
                        </div>
                        &nbsp
                        <div class="form-group">
                            <button type = "submit" class = "btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                               Buscar
                            </button>
                        </div>
                    {{ Form::close() }}
                    </h1>
                    &nbsp

Listado de Académicos
&nbsp
<a href="{{route('academicos.create')}}" class="btn btn-sm btn-primary pull-right"> Crear </a>
</div>
</div>
<div class="datagrid">
                <table class="table table-striped table-hover">                
                    <thead>
                        <tr>
                            <th width="10px">ID</th>
                            <th>Nombre</th>
                            <th></th>
                            <th></th>
                            <th>Rut</th>
                            <th colspan="3">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($academicos as $academico)
                        <tr>
                            <td>{{ $academico->id }}</td>
                            <td>{{ $academico->nombre }}</td>
                            <td>{{ $academico->apellido_paterno }}</td>
                            <td>{{ $academico->apellido_materno }}</td>
                            <td>{{ $academico->rut }}</td>
                            <td width="10px">
                                <a href="{{ route('academicos.show', $academico->id) }}" class="btn btn-sm btn-default">
                                    ver
                                </a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('academicos.edit', $academico->id) }}" class="btn btn-sm btn-default">
                                    editar
                                </a>
                            </td>
                            <td width="10px">
                                {!! Form::open(['route' => ['academicos.destroy', $academico->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $academicos->render() }}
            </div>
</div>
</div>
</div>
@endsection