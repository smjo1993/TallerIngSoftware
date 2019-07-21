<table>
<tr>    
<td>  
<div class="form-group">
    {{ Form::label('nombre', 'Nombre del Estudiante') }}
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
    {{ Form::label('fono', 'Teléfono') }}
    {{ Form::text('fono', null, ['class' => 'form-control', 'id' => 'fono' ]) }}
</div>
<div class="form-group">
    {{ Form::label('carrera_id' , 'Carreras') }}
    {{ Form::select('carrera_id' , $carreras, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'Email Estudiante') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email' ]) }}
</div>

<!--@section('scripts')
    <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min') }}"></script>
    <script>
        $(document).ready(function(){
            $("#name, #slug").stringToSlug({
                callback: function(text){
                    $("#slug").val(text);
                } 
            });
        });
    </script>
@endsection-->