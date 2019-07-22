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
  
        if (window.location.href.indexOf("http://localhost/blog/public/estudiantes") > -1) {  
            window.location.href = "http://localhost/blog/public";    
         
        } 
        if (window.location.href.indexOf("http://localhost/blog/public/academicos") > -1){ 
            setTimeout(function () {
                window.location.href = "http://localhost/blog/public";
                window.location.href = "http://localhost/blog/public/academicos"; 
                windows.location.reload(true);       
            }, 100);
        }  
        if (window.location.href.indexOf("http://localhost/blog/public/actividad_titulacions") > -1){
            setTimeout(function () {
                window.location.href = "http://localhost/blog/public";
                window.location.href = "http://localhost/blog/public/actividad_titulacions"; 
                windows.location.reload(true);       
            }, 100); 
        }

           /* setTimeout(function () {
                windows.location.reload(true);        
            }, 100);*/


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
        setTimeout(function () {
            window.location.href = "http://localhost/blog/public";
            window.location.href = "http://localhost/blog/public/organizacion_externas";
            windows.location.reload(true);       
        }, 100); 
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
        var value =  document.getElementById("numero").value;
        console.log(value);
        e.preventDefault();
        if(! confirm("Esta seguro que desea inscribir este trabajo de titulo?")){
            return false;
        }


        alert("inscripcion exitosa exitosa");
        setTimeout(function () {
            window.location.href = "http://localhost/blog/public";
            window.location.href = "http://localhost/blog/public/carreras"; 
            windows.location.reload(true);       
        }, 100); 
        /*window.location.href = "http://localhost/blog/public/carreras";      
        function refresh() {

            setTimeout(function () {
                location.reload()
            }, 500);
        }*/
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
        setTimeout(function () {
            window.location.href = "http://localhost/blog/public";
            window.location.href = "http://localhost/blog/public/tutors"; 
            windows.location.reload(true);       
        }, 100); 
        /*window.location.href = "http://localhost/blog/public/tutors";
        function refresh() {

            setTimeout(function () {
                location.reload()
            }, 500);
        }*/
        
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
        setTimeout(function () {
            window.location.href = "http://localhost/blog/public";
            window.location.href = "http://localhost/blog/public/trabajo_titulacions"; 
            windows.location.reload(true);       
        }, 100); 
        /*window.location.href = "http://localhost/blog/public/trabajo_titulacions";
        function refresh() {

            setTimeout(function () {
                location.reload()
            }, 500);
        }*/
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
