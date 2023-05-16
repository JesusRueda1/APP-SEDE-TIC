$(document).ready(function(){
    Formulario = document.querySelector('#soloNumeros');
    Formulario.doc.addEventListener('keypress', function (e){
        if (!soloNumeros(event)){
        e.preventDefault();
    }
    });
    
    //Solo permite introducir numeros.
    function soloNumeros(e){
        var key = e.charCode;
        return key >= 48 && key <= 57;
    }
});