
$(document).ready(function() {
  
    $( '#appbundle_ficha_realizaActividadFisica' ).on( 'click', function() {
        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            $('#appbundle_ficha_numeroDeVecesPorSemana').removeAttr("disabled");
            $('#appbundle_ficha_minutos').removeAttr("disabled");

        } else {
            // Hacer algo si el checkbox ha sido deseleccionado
            
            $('#appbundle_ficha_numeroDeVecesPorSemana').attr("disabled", "disabled");
            $('#appbundle_ficha_minutos').attr("disabled", "disabled");
        }
    });
    $( '#appbundle_ficha_automonitoreoGlucemico' ).on( 'click', function() {
        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            $('#appbundle_ficha_numeroDeVecesPorDia').removeAttr("disabled");
           

        } else {
            // Hacer algo si el checkbox ha sido deseleccionado
            
            $('#appbundle_ficha_numeroDeVecesPorDia').attr("disabled", "disabled");
            
        }
    });
    $( '#appbundle_ficha_fumaActualmente' ).on( 'click', function() {
        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            $('#appbundle_ficha_cigarrillosAlDia').removeAttr("disabled");
           

        } else if(!($( '#appbundle_ficha_fumoAnteriorMente' ).is(':checked'))) {
            // Hacer algo si el checkbox ha sido deseleccionado pero si el otro no está seleccionado
            $('#appbundle_ficha_cigarrillosAlDia').attr("disabled", "disabled");
        }
       

    });
    $( '#appbundle_ficha_fumoAnteriorMente' ).on( 'click', function() {
        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            $('#appbundle_ficha_cigarrillosAlDia').removeAttr("disabled");
           

        } else if(!($( '#appbundle_ficha_fumaActualmente' ).is(':checked'))){
            // Hacer algo si el checkbox ha sido deseleccionado pero si el otro no esta seleccionado
            
            $('#appbundle_ficha_cigarrillosAlDia').attr("disabled", "disabled");
            
        }
    });

});