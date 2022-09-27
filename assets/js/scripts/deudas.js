
function listardeudas(opcion){
     
    $.ajax({
        type: "POST",
        url: "deudas/listar",
        data: {opcion: opcion},
        dataType: "json",
        success: function (response) {
            $("#lista_producto").html(response);
        },
        error: (response) => {
            console.log(response);
        }
    });
};