<table>
<tr>    
<td>  
<div class="form-group">
    {{ Form::label('nombre', 'Nombre del Académico') }}
    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre' ]) }}
</div>
</td>
<td>
<div class="form-group">
    {{ Form::label('apellido_paterno', 'Apellido Paterno') }}
    {{ Form::text('apellido_paterno', null, ['class' => 'form-control', 'id' => 'apellido_paterno' ]) }}
</div>
</td>
<td>
<div class="form-group">
    {{ Form::label('apellido_materno', 'Apellido Materno') }}
    {{ Form::text('apellido_materno', null, ['class' => 'form-control', 'id' => 'apellido_materno' ]) }}
</div>
</td>
</tr>
</table>
<div class="form-group">
    {{ Form::label('email', 'Email Académico') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email' ]) }}
</div>


