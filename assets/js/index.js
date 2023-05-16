$(document).ready(function(){        
    $('#recuperarclave').hide(); 
    
    $('#olvidar').on('click', function() {
        $('#signup').hide(); //para ocultar
        $("#recuperarclave").fadeIn("slow"); //mostrar
    });
    
    $('#volver').on('click', function() {
        $('#recuperarclave').hide(); //para ocultar
        $("#signup").fadeIn("slow"); //mostrar
    });
    
    Formulario = document.querySelector('#soloNumeros');
    Formulario.username.addEventListener('keypress', function (e){
        if (!soloNumeros(event)){
        e.preventDefault();
    }
    })
    
    //Solo permite introducir numeros.
    function soloNumeros(e){
        var key = e.charCode;
        return key >= 48 && key <= 57;
    }
});