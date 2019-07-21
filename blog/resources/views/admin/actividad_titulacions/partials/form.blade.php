<div class="form-group">
    {{ Form::label('nombre', 'Nombre de Actividad de Titulación') }}
    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre' ]) }}
</div>
<br>
<div class="form-group">
    {{ Form::label('duracion', 'Duración de la Actividad') }}
    {{ Form::text('duracion', null, ['class' => 'form-control', 'id' => 'duracion' ]) }}
</div>
<div class="form-group">
    <br>    
    {{ Form::label('comision', 'Organización Externa') }}
    <label>
        {{ Form::radio('comision', 'SI') }} SI
    </label>
    <label>
        {{ Form::radio('comision', 'NO') }} NO
    </label> 
</div>
<div class="form-group">
    <br>
    {{ Form::label('cant_estudiante', 'Cantidad de Estudiantes') }}
    {{ Form::text('cant_estudiante', null, ['class' => 'form-control', 'id' => 'cant_estudiante' ]) }}
</div>


