<!--<div class="form-group">
    {{ Form::label('nombre', 'Titulo Trabajo Titulacion') }}
    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre' ]) }}
</div>
<div class="form-group">
    {{ Form::label('id_actividad' , 'Tipo de Actividad') }}
    {{ Form::select('id_actividad' , $actividad_titulacions, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('id_academico' , 'Profesor guia') }}
    {{ Form::select('id_academico' , $academicos, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('fecha_inicio' , 'Fecha de inicio de la Actividad') }}
    {{Form::date('fecha_inicio', \Carbon\Carbon::now(), array('class' => 'form-control', 'required' => '')) }}
</div>
<div class="form-group">
    {{ Form::label('fecha_termino' , 'Fecha de termino de la Actividad') }}
    {{Form::date('fecha_termino', \Carbon\Carbon::now(), array('class' => 'form-control', 'required' => '')) }}
</div>
<div class="form-group">
    {{ Form::label('id_organizacion', 'Organizacion Externa') }}
    {{ Form::select('id_organizacion' , $organizaciones, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('id_estudiante' , 'Estudiantes participantes') }}
    {{ Form::select('id_estudiante' , $estudiantes, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::select('id_estudiante' , $estudiantes, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::select('id_estudiante' , $estudiantes, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::select('id_estudiante' , $estudiantes, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::select('id_estudiante' , $estudiantes, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'] ) }}
</div>-->

<!--<b>Mostrar contenido?</b>
<input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
v

 <script type="text/javascript">
    function showContent() {
        element = document.getElementById("comision");
        check = document.getElementById("comision");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>**/