initSalida();
function initSalida() {
    $(".borrar").click(function(e) {
        e.preventDefault();
        var id = $(this).attr("borrar-id");
        var boton = $(this)[0];
        boton.blur();

        if (confirm("¿Esta seguro que desea borrar a está persona?")) {
            $.ajax({
                type: "POST",
                url: "php/borrar_crud.php",
                data: 'id='+id,
                success: function(data){
                    alert(data, 1);
                    window.location.reload();
                }
            });
        }          
    });
}