$(document).ready(function() {


    $( '#appbundle_ficha_realizaActividadFisica' ).on( 'click', function() {
        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            $('#appbundle_ficha_numeroDeVecesPorSemana').removeAttr("disabled");
            $('#appbundle_ficha_minutos').removeAttr("disabled");

        } else {
            // Hacer algo si el checkbox ha sido deseleccionado
            $('#appbundle_ficha_numeroDeVecesPorSemana').attr("value","");
            $('#appbundle_ficha_minutos').attr("value","");
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
            $('#appbundle_ficha_numeroDeVecesPorDia').attr("value","");
            $('#appbundle_ficha_numeroDeVecesPorDia').attr("disabled", "disabled");
            
        }
    });
    $( '#appbundle_ficha_fumaActualmente' ).on( 'click', function() {
        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            $('#appbundle_ficha_cigarrillosAlDia').removeAttr("disabled");
           

        } else if(!($( '#appbundle_ficha_fumoAnteriorMente' ).is(':checked'))) {
            // Hacer algo si el checkbox ha sido deseleccionado pero si el otro no está seleccionado
            $('#appbundle_ficha_cigarrillosAlDia').attr("value","");
            $('#appbundle_ficha_cigarrillosAlDia').attr("disabled", "disabled");
        }
       

    });
    $( '#appbundle_ficha_fumoAnteriorMente' ).on( 'click', function() {

        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            $('#appbundle_ficha_cigarrillosAlDia').removeAttr("disabled");
            

        } else if(!($( '#appbundle_ficha_fumaActualmente' ).is(':checked'))){
            // Hacer algo si el checkbox ha sido deseleccionado pero si el otro no esta seleccionado
            $('#appbundle_ficha_cigarrillosAlDia').attr("value","");
            $('#appbundle_ficha_cigarrillosAlDia').attr("disabled", "disabled");
            
        }
    });
    $( '#appbundle_ficha_cmOtras' ).on( 'click', function() {
        
        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            $('#appbundle_ficha_cmCuales').removeAttr("disabled");
           

        } else if(!($(this).is(':checked'))){
            // Hacer algo si el checkbox ha sido deseleccionado pero si el otro no esta seleccionado
            $('#appbundle_ficha_cmCuales').attr("value","");
            $('#appbundle_ficha_cmCuales').attr("disabled", "disabled");
            
        }
    });
    $( '#appbundle_ficha_fichasHijos_0_complicacionesOtras' ).on( 'click', function() {
        
        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            $('#appbundle_ficha_fichasHijos_0_complicacionesCuales').removeAttr("disabled");
           

        } else if(!($(this).is(':checked'))){
            // Hacer algo si el checkbox ha sido deseleccionado pero si el otro no esta seleccionado
            $('#appbundle_ficha_fichasHijos_0_complicacionesCuales').attr("value","");
            $('#appbundle_ficha_fichasHijos_0_complicacionesCuales').attr("disabled", "disabled");
            
        }
    });
    $( '#appbundle_ficha_fichasHijos_1_complicacionesOtras' ).on( 'click', function() {
        
        if( $(this).is(':checked') ){
            // Hacer algo si el checkbox ha sido seleccionado
            $('#appbundle_ficha_fichasHijos_1_complicacionesCuales').removeAttr("disabled");
           

        } else if(!($(this).is(':checked'))){
            // Hacer algo si el checkbox ha sido deseleccionado pero si el otro no esta seleccionado
            $('#appbundle_ficha_fichasHijos_1_complicacionesCuales').attr("value","");
            $('#appbundle_ficha_fichasHijos_1_complicacionesCuales').attr("disabled", "disabled");
            
        }
    });
    //agregado para "Los días de hospitalizaciones sólo se deberían poder marcar si previamente se completó la causa"
    //dehabilita segun datos iniciales
    if( $('#appbundle_ficha_causaHospitalizacion1').val()  === ''){
        // Hacer algo si el campo esta vacio
        $('#appbundle_ficha_diasHospitalizacion1').attr("value",null);
        $('#appbundle_ficha_diasHospitalizacion1').attr("disabled", "disabled");
        
    } else if(!($('#appbundle_ficha_causaHospitalizacion1').val()  === '')){
        // Hacer algo si el campo no esta vacio
        $('#appbundle_ficha_diasHospitalizacion1').removeAttr("disabled");            
    };
    if( $('#appbundle_ficha_causaHospitalizacion2').val()  === ''){
        // Hacer algo si el campo esta vacio
        $('#appbundle_ficha_diasHospitalizacion2').attr("value",null);
        $('#appbundle_ficha_diasHospitalizacion2').attr("disabled", "disabled");
        
    } else if(!($('#appbundle_ficha_causaHospitalizacion2').val()  === '')){
        // Hacer algo si el campo no esta vacio
        $('#appbundle_ficha_diasHospitalizacion2').removeAttr("disabled");            
    };
    if( $('#appbundle_ficha_causaHospitalizacion3').val()  === ''){
        // Hacer algo si el campo esta vacio
        $('#appbundle_ficha_diasHospitalizacion3').attr("value",null);
        $('#appbundle_ficha_diasHospitalizacion3').attr("disabled", "disabled");
        
    } else if(!($('#appbundle_ficha_causaHospitalizacion3').val()  === '')){
        // Hacer algo si el campo no esta vacio
        $('#appbundle_ficha_diasHospitalizacion3').removeAttr("disabled");            
    };

    $( '#appbundle_ficha_causaHospitalizacion1' ).on( 'change', function() {
        if( $(this).val()  === ''){
            // Hacer algo si el campo esta vacio
            $('#appbundle_ficha_diasHospitalizacion1').attr("value",null);
            $('#appbundle_ficha_diasHospitalizacion1').attr("disabled", "disabled");
            
        } else if(!($(this).val()  === '')){
            // Hacer algo si el campo no esta vacio
            $('#appbundle_ficha_diasHospitalizacion1').removeAttr("disabled");            
        }
    });
    $( '#appbundle_ficha_causaHospitalizacion2' ).on( 'change', function() {
        if( $(this).val()  === ''){
            // Hacer algo si el campo esta vacio
            $('#appbundle_ficha_diasHospitalizacion2').attr("value",null);
            $('#appbundle_ficha_diasHospitalizacion2').attr("disabled", "disabled");
            
        } else if(!($(this).val()  === '')){
            // Hacer algo si el campo no esta vacio
            $('#appbundle_ficha_diasHospitalizacion2').removeAttr("disabled");            
        }
    });
    $( '#appbundle_ficha_causaHospitalizacion3' ).on( 'change', function() {
        if( $(this).val()  === ''){
            // Hacer algo si el campo esta vacio
            $('#appbundle_ficha_diasHospitalizacion3').attr("value",null);
            $('#appbundle_ficha_diasHospitalizacion3').attr("disabled", "disabled");
            
        } else if(!($(this).val()  === '')){
            // Hacer algo si el campo no esta vacio
            $('#appbundle_ficha_diasHospitalizacion3').removeAttr("disabled");            
        }
    });
    //hace visible el div del detalle de recien nacidos y deshabilita el boton agregar recien nacido
    $( '#AgregarRecienNacido' ).on( 'click', function() {
        $('#hijos').removeAttr("hidden");
        $('#AgregarRecienNacido').attr("disabled", "disabled");
        
    });
    //cuando coloque la cantidad de hijos habilito el formulario de hijo para que complete los datos 
    $("#appbundle_ficha_numeroHijos").change(function(){
        var cantHijos = $("#appbundle_ficha_numeroHijos").val();

        $('#sectionHijos').removeAttr("hidden");
        if(cantHijos == 1){
             $('#hijo1').removeAttr("hidden");
            
        }
        else{
            if(cantHijos == 2){
                $('#hijo1').removeAttr("hidden");
                $('#hijo2').removeAttr("hidden");
              
            }
        }
    });


    var cantHijos = $("#appbundle_ficha_numeroHijos").val();
    
    
    if(cantHijos > 0){
        $('#hijos').removeAttr("hidden");
        $('#sectionHijos').removeAttr("hidden");
        console.log("tiene hijos");
    }
    if(cantHijos == 1){
        console.log("entro tiene un pibe");
         $('#hijo1').removeAttr("hidden");
        
    }
    else{
        if(cantHijos == 2){
            console.log("tine dos pibes");
            $('#hijo1').removeAttr("hidden");
            $('#hijo2').removeAttr("hidden");
          
        }
    }

});