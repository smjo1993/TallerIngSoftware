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
