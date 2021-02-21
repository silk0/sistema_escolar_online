$(document).ready(function () {
    $("#registrarCuentaF").bind("submit",function(){
        // Capturamnos el boton de envío
        var btnEnviar = $("#registrarCuentaB");

        $.ajax({
            type: $(this).attr("method"),
            url:  $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function(){
                /*
                * Esta función se ejecuta durante el envió de la petición al
                * servidor.
                * */      
            },
            complete:function(data){
                /*
                * Se ejecuta al termino de la petición
                * */
            },
            success: function(data){
                /*
                * Se ejecuta cuando termina la petición y esta ha sido
                * correcta
                * */
                                      
               document.getElementById("registrarCuentaF").reset();
               
               // Fade In / Fade Out
               toastr.success('La cuenta fue creada y almacenada e nuetros registros.', 'Exito',
               { "showMethod": "fadeIn", "hideMethod": "fadeOut", timeOut: 3500 }); 

                setTimeout(function() {
                window.location="/dashboard";
               
              }, 4500);
              
                
            },
            error: function( jqXHR, textStatus, errorThrown, data ) {
                $mensaje = null;
                if (jqXHR.status === 0) {
      
                 $mensaje = 'Not connect: Verify Network.';
      
                } else if (jqXHR.status == 404) {
      
                 $mensaje = 'Requested page not found [404]';
      
                } else if (jqXHR.status == 500) {
      
                 $mensaje = 'Internal Server Error [500].';
                 toastr.info(this, 'Informacion',
                            { "showMethod": "fadeIn", "hideMethod": "fadeOut", timeOut: 4500 });
      
                } else if (textStatus === 'parsererror') {
      
                 $mensaje = 'Requested JSON parse failed.';
      
                } else if (textStatus === 'timeout') {
      
                  $mensaje = 'Time out error.';
      
                } else if (textStatus === 'abort') {
      
                  $mensaje ='Ajax request aborted.';
      
                } else {
                    var o = $.parseJSON(jqXHR.responseText);
                    toastr.error(o.message, 'error',
                            { "showMethod": "fadeIn", "hideMethod": "fadeOut", timeOut: 4500 });                    
                }  
                
                if($mensaje!=null)
                  toastr.error($mensaje, '',
                      { "showMethod": "fadeIn", "hideMethod": "fadeOut", timeOut: 4500 });      
            }             
        
        });
        // Nos permite cancelar el envio del formulario       \
        return false;
    });
});