$(document).ready(function() {
    listardeudasCobrar()
    listardeudasPagar()
})

function listardeudasPagar(){
     
    $.ajax({
        type: "POST",
        url: "deudas/listarDeudasPagar",
        dataType: "json",
        success: function (response) {
            $("#totalP").html(response.total);
            $("#lista_deudasP").html(response.data);
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function listardeudasCobrar(){
     
    $.ajax({
        type: "POST",
        url: "deudas/listarDeudasCobrar",
        dataType: "json",
        success: function (response) {
            $("#totalC").html(response.total);
            $("#lista_deudasC").html(response.data);
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function editarDeudaPagar(id, monto, cant){

    $.ajax({
        type: "POST",
        url: "deudas/movimientosPagar/"+id,
        dataType: "json",
        success: function (response) {
            $('#cantD').html(cant);
            $('#montoD').html(monto);
            $('#nombreD').html(response.nombre);
            $('#lista_pagar').html(response.data);
            $('#exampleModalToggle17').modal('show');
        },
        error: (response) => {
            console.log(response);
        }
    });   
}

function editarDeudaCobrar(id, monto, cant){

    $.ajax({
        type: "POST",
        url: "deudas/movimientosCobrar/"+id,
        dataType: "json",
        success: function (response) {
            $('#cantC').html(cant);
            $('#montoC').html(monto);
            $('#nombreC').html(response.nombre);
            $('#lista_cobrar').html(response.data);
            $('#exampleModalToggle13').modal('show');
        },
        error: (response) => {
            console.log(response);
        }
    });
    
}

function detallesPagar(id,resto){
    $.ajax({
        type: "POST",
        url: "deudas/detallesPagar/"+id,
        dataType: "json",
        success: function (response) {
            console.log(response)
            $('#conceptoP').html(response.nombre);
            $('#montoP').html(resto);
            $('#categoria').html(response.categoria);
            $('#fechaP').html(response.fecha);
            $('#id').val(id);
            $('#exampleModalToggle18').modal('show');
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function detallesCobrar(id,resto){
    $.ajax({
        type: "POST",
        url: "deudas/detallesCobrar/"+id,
        dataType: "json",
        success: function (response) {
            console.log(response)
            $('#fechC').html(response.data.fecha);
            $('#nameC').html(response.data.nombre);
            $('#valueC').html(resto);
            $('#table').html(response.productos);
            $('#id').val(id);
            $('#exampleModalToggle14').modal('show');
        },
        error: (response) => {
            console.log(response);
        }
    });
}

$('#abonoC').on("click",function(){
    
    var id = $('#id').val();console.log(id)
    $('#exampleModalToggle15').modal('show');
    aggAbonoPago(id,"");
}) 

$('#abonoP').on("click",function(){
    
    var id = $('#id').val();
    
    $('#exampleModalToggle15').modal('show');
    aggAbonoPago(id,1);
}) 

function aggAbonoPago(id,tipo){
    $('#guardar').on("click", function(){
        var fecha = $("#fechaA").val();
        var valor = $("#valorA").val();
        var concepto = $("#conceptoA").val();
        var metodo= $("input[name='opciones']:radio:checked").val();

        var parametros = {
            "fecha" : fecha,
            "valor" : valor,
            "concepto" : concepto,
            "metodo" : metodo,
            "id" : id
        };
        console.log(parametros)
        $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'deudas/abonar/'+tipo, //archivo que recibe la peticion
            type:  'POST', //método de envio
            success:  function (response) {
                alert("abono realizado correctamente");
                $('#exampleModalToggle15').modal('hide');    
                //window.location.reload();   
            },
            error: (response) => {
                console.log(response);
            }
        });
    })
}

