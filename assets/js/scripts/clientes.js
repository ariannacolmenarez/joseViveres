$("#busqueda").on("click",function(){
    console.log("boton");
})

$("#volver8").on("click", function() {
    $('#exampleModalToggle11').modal('hide');
});

$("#volver9").on("click", function() {
    limpiar();
});

$("#close").on("click", function() {
    limpiar();
});

$("#clientes").on("click", function() {
    listarclientes();
});

function limpiar(){
    $('input').val("");
    $('select').val("");
    $('textarea').val("");
};




function listarclientes(){
    
    $.get("clientes/listar", {}, function (data, status) {
        $("#cliente").html(data);
        $('#exampleModalToggle7').modal('show');
    });
};


function consultarclientes (id) {
    $.ajax({
        type: "POST",
        url: "clientes/consultar/"+id,
        dataType: "json",
        success: function (response) {
            
            response.map( function (elem) {
                console.log(elem.nombre);
                $("#idcliente").val(elem.id);
                $("#nombrecliente").val(elem.nombre);
                $("#telefonocliente").val(elem.telefono);
                $("#nro_doccliente").val(elem.nro_doc);
                $("#tipo_doccliente option[value='"+ elem.tipo_doc +"']").attr("selected",true);
                $("#comentariocliente").val(elem.comentario);
            });
            $('#exampleModalToggle8').modal('show');
        },
        error: (response) => {
            console.log(response);
        }
    });
    
}

function guardarCliente(){
    var id = $("#idcliente").val();
    var nombre = $("#nombrecliente").val();
    var telefono = $("#telefonocliente").val();
    var nro_doc = $("#nro_doccliente").val();
    var tipo_doc= $("#tipo_doccliente").val();
    var comentario = $("#comentariocliente").val();

    var parametros = {
        "nombrecliente" : nombre,
        "telefonocliente" : telefono,
        "nro_doccliente" : nro_doc,
        "tipo_doccliente" : tipo_doc,
        "comentariocliente" : comentario,
        "idcliente" : id
    };
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'clientes/guardar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) {
            $('#exampleModalToggle8').modal('hide');    
            listarclientes();
                
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function registrarCliente(){
    var nombre = $("#nombreC").val();
    var telefono = $("#telefonoC").val();
    var nro_doc = $("#nro_docC").val();
    var tipo_doc= $("#tipo_docC").val();
    var comentario = $("#comentarioC").val();

    
    var parametros = {
        "nombrecliente" : nombre,
        "telefonocliente" : telefono,
        "nro_doccliente" : nro_doc,
        "tipo_doccliente" : tipo_doc,
        "comentariocliente" : comentario,
    };
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'clientes/registrar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle9').modal('hide');
            limpiar();    
            listarclientes();
                
        },error: (response) => {
            console.log(response);
        }
    });
}

function eliminarCliente(){
    var id = $("#idcliente").val();

    var parametro = {"idcliente" : id};
    $.ajax({
        data:  parametro, //datos que se envian a traves de ajax
        url:   'clientes/eliminar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle8').modal('hide');    
            listarclientes();
                
        },
        error: (response) => {
            console.log(response);
        }
    });
}

$("#buscadorcliente").on("keyup",function(e) {
    e.preventDefault();
    var busqueda = $("#buscadorcliente").val();
    if (busqueda !== "") {
        var parametro = {"busqueda" : busqueda};
        $.ajax({
            data:  parametro, //datos que se envian a traves de ajax
            url:   'clientes/buscar', //archivo que recibe la peticion
            type:  'POST', //método de envio
            success:  function (response) {
                $("#cliente").html(response);
                $('#exampleModalToggle7').modal('show');

            },
            error: (response) => {
                console.log(response);
            }
        });  
    }else{
        listarclientes();
    }

    
})