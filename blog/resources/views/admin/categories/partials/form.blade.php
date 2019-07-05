

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'] ) }}
</div>

@section('scripts')
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
@endsection