$("#close").on("click", function() {
    window.location.reload();
});

$("#gastos").on("click", function(e) {
    listarCategorias();
    listarProveedores();
});


function listarCategorias(){

    $.ajax({
        type: "POST",
        url: "gastos/listarCategorias",
        dataType: "html",
        success: function (response) {
            $('#cat').prepend(response);
            $('#exampleModalToggle2').modal('show');
        },
        error: (response) => {
            console.log(response);
        }
    });

};
function listarProveedores(){

    $.ajax({
        type: "POST",
        url: "gastos/listarProveedores",
        dataType: "html",
        success: function (response) {
            $('#proveedorv').prepend(response);
        },
        error: (response) => {
            console.log(response);
        }
    });

};

function registrarGasto(){
    var nombre = $("#nombrev").val();
    var estado = $('input[name=estado]:checked', '#estadov').val();
    var categoria = $("#cat").val();
    var fecha= $("#fechav").val();
    var hora= $("#horav").val();
    var monto = $("#montov").val();
    var proveedor = $("#proveedorv").val();
    var metodo = $('input[name=metodo]:checked', '#metodov').val();

    var parametros = {
        "nombre" : nombre,
        "estado" : estado,
        "categoria" : categoria,
        "fecha" : fecha,
        "hora" : hora,
        "proveedor" : proveedor,
        "monto" : monto,
        "metodo" : metodo,
    };
    $.ajax({
        data:  parametros, 
        url:   'gastos/registrar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            alert("registrado correctamente")
            $('#exampleModalToggle2').modal('hide');  
            window.location.reload();  
        },error: (response) => {
            console.log(response);
        }
    });
}


    

