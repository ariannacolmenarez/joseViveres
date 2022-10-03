$(document).ready(function() {  
    listarIngresos($("#fechas").val()); 
    listarEgresos($("#fechas").val());
    totalIngreso($("#fechas").val(),1);
    totalEgreso($("#fechas").val(),0);
    
  
})

$("#fechas").on("change",function(){
    $("#date").val("");
    listarIngresos($("#fechas").val());
    listarEgresos($("#fechas").val());
    totalIngreso($("#fechas").val(),1);
    totalEgreso($("#fechas").val(),0);
    utilidad();
});

$("#date").on("change",function(){
    $("#fechas").val("");
    listarIngresos($("#date").val());
    listarEgresos($("#date").val());
    totalIngreso($("#date").val(),1);
    totalEgreso($("#fechas").val(),0);
    utilidad();
});

function listarIngresos(fecha){
    
    $.ajax({
        type: "POST",
        url: "balance/listar",
        dataType: "json",
        data: {'fecha': fecha},
        success: function (response) {
            $("#home-tab-pane").html(response);
            $('#example').DataTable({
                "language": {
                  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
              });
        },
        error: (response) => {
            console.log(response);
        }
    });
};

function listarEgresos(fecha){
    
    $.ajax({
        type: "POST",
        url: "balance/listarEgresos",
        dataType: "json",
        data: {'fecha': fecha},
        success: function (response) {
            $("#profile-tab-pane").html(response);
            $('#example2').DataTable({
                "language": {
                  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
              });
        },
        error: (response) => {
            console.log(response);
        }
    });
};

function eliminarVenta(id){
    var parametro = {"id" : id};
    $.ajax({
        data:  parametro, //datos que se envian a traves de ajax
        url:   'ventas/eliminar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve   
            listarIngresos();
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function eliminarGasto(id){
    var parametro = {"id" : id};
    $.ajax({
        data:  parametro, //datos que se envian a traves de ajax
        url:   'gastos/eliminar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve   
            listarEgresos();
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function totalIngreso(fecha,ingreso) {
    $.ajax({
        url:   'balance/totales', //archivo que recibe la peticion
        type:  'POST', //método de envio
        data: {'fecha': fecha,'data':ingreso},
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve   
            $('#sell').html(response);
            utilidad();
        },
        error: (response) => {
            console.log(response);
        }
    });
    
}

function totalEgreso(fecha,egreso,callback) {
    $.ajax({
        url:   'balance/totales', //archivo que recibe la peticion
        type:  'POST', //método de envio
        data: {'fecha': fecha,'data':egreso},
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve   
            $('#bills').html(response);
            utilidad();
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function utilidad(){
    var ventas= $("#sell").text();
    var gastos = $("#bills").text();
    var utilidad = ventas - gastos;
    $('#utility').html(utilidad.toFixed(2));
    
}

