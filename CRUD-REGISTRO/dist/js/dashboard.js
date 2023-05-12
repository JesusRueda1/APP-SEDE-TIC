$(document).ready(function () {
    $('#example').DataTable({
        
        // Enable the searching
        // of the DataTable
        //searching: true
        "language": {
             "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
    });
});

ejecutar();
        function ejecutar(){
            $(".buscar_doc").click(function(e) {
                let doc = $('#document').val();                  
                
                $.ajax({
                    type: 'POST',
                    url: 'php/codigo_php.php',
                    data: {
                        'documento' : doc,
                    },
                    success: function(data){
                        $("#register").html(data);
                    }
                });
            });
        }

        initSalida();
        function initSalida() {
            $(".enviar").click(function(e) {
                e.preventDefault();
                var id = $(this).attr("id-articulo");
                var boton = $(this)[0];
                boton.blur();

                if (confirm("¿Esta seguro que desea darle salida a la persona?")) {
                    $.ajax({
                        type: "POST",
                        url: "php/salida.php",
                        data: 'id_articulos='+id,
                        success: function(data){
                            alert(data, 1);
                            window.location.reload();
                        }
                    });
                }          
            });
        }

        $( document ).ready(function() {

            //php/buscarfecha.php
            $("#fecha").on("change", mandarFecha);
            mandarFecha();
            function mandarFecha() {
                let fecha = $('#fecha').val();
                    $.ajax({
                        type: "POST",
                        url: "php/buscarfecha.php",
                        data: {
                            'fecha': fecha,
                        },
                        success: function(data){
                            $("#mostrar-tabla").html(data);
                        }
                    });
                }
        });