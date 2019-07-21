//ELIMINAR
$(document).ready(function(){
    $('.btn-delete').click(function (e) {
        e.preventDefault();
        if(! confirm("Esta seguro de eliminar?")){
            return false;
        }
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action'); 
        
        $.post(url, form.serialize(),function(result){
            alert("Eliminacion exitosa");
            row.fadeOut();
            
            //$('#alert').html(result.message);
        }).fail(function(){
            $('#alert').html('Algo salio mal');
        });
    })
})
//GUARDAR CAMBIOS
$(document).ready(function(){
    $('.btn-guardar').click(function (e) {
        e.preventDefault();
        if(! confirm("Esta seguro de guardar estos cambios?")){
            return false;
        }
        
        alert("cambio exitoso");
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action'); 

        $.post(url, form.serialize(),function(result){
            //row.fadeOut();
            $('#alert').html(result.info);
        }).fail(function(){
            $('#alert').html('Algo salio mal');
        });
        
    })
})
//ANULAR
$(document).ready(function(){
    $('.btn-anular').click(function (e) {
        e.preventDefault();
        if(! confirm("Esta seguro de guardar estos cambios?")){
            return false;
        }
        
        alert("anulacion exitosa");
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action'); 

        $.post(url, form.serialize(),function(result){
            //row.fadeOut();
            $('#alert').html(result.info);
        }).fail(function(){
            $('#alert').html('Algo salio mal');
        });
        
    })
})
//INSCRIPCION FORMAL
$(document).ready(function(){
    $('.btn-inscribir').click(function (e) {
        e.preventDefault();
        if(! confirm("Esta seguro que desea inscribir este trabajo de titulo?")){
            return false;
        }


        alert("inscripcion exitosa exitosa");
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action'); 

        $.post(url, form.serialize(),function(result){
            //row.fadeOut();
            $('#alert').html(result.info);
        }).fail(function(){
            $('#alert').html('Algo salio mal');
        });
        
    })
})
//FINALIZAR
$(document).ready(function(){
    $('.btn-finalizar').click(function (e) {
        e.preventDefault();
        if(! confirm("Desea guardar cambios?")){
            return false;
        }
        
        alert("inscripcion de nota exitosa");
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action'); 

        $.post(url, form.serialize(),function(result){
            //row.fadeOut();
            $('#alert').html(result.info);
        }).fail(function(){
            $('#alert').html('Algo salio mal');
        });
        
    })
})
//AUTORIZAR
$(document).ready(function(){
    $('.btn-autorizar').click(function (e) {
        e.preventDefault();
        if(! confirm("Desea autorizar este trabajo?")){
            return false;
        }
        
        alert("autorizacion exitosa");
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action'); 

        $.post(url, form.serialize(),function(result){
            //row.fadeOut();
            $('#alert').html(result.info);
        }).fail(function(){
            $('#alert').html('Algo salio mal');
        });
        
    })
})

