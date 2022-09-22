$("#busqueda").on("click",function(){
    console.log("boton");
})

$("#volver16").on("click", function() {
    $('#exampleModalToggle15').modal('hide');
});

$("#volver15").on("click", function() {
    limpiar();
});

$("#close").on("click", function() {
    limpiar();
});

$("#usuarios").on("click", function() {
    listarusuarios();
});

function limpiar(){
    $('input').val("");
    $('select').val("");
    $('textarea').val("");
};




function listarusuarios(){
    
    $.get("usuarios/listar", {}, function (data, status) {
        console.log(data);
        $("#usuarios2").html(data);
        $('#exampleModalToggle14').modal('show');
    });
};


function consultarusuarios (id) {
    $.ajax({
        type: "POST",
        url: "usuarios/consultar/"+id,
        dataType: "json",
        success: function (response) {
            
            response.map( function (elem) {
                console.log(elem);
                $("#id").val(elem.id);
                $("#nombre1").val(elem.nombre);
                $("#correo").val(elem.correo);
            });
            $('#exampleModalToggle16').modal('show');
        },
        error: (response) => {
            console.log(response);
        }
    });
    
}

function guardarusuarios(){
    var id = $("#id").val();
    var nombre = $("#nombre1").val();
    var correo = $("#correo").val();
    var contraseña = $("#contraseña").val();

    var parametros = {
        "nombre1" : nombre,
        "correo" : correo,
        "contraseña" : contraseña,
        "id" : id
    };
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'usuarios/guardar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) {
            $('#exampleModalToggle16').modal('hide');    
            listarusuarios();
                
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function registrarusuarios(){
    var nombre = $("#nombre3").val();
    var correo = $("#correo2").val();
    var contraseña = $("#contraseña1").val();
   
    var parametros = {
        "nombre1" : nombre,
        "correo" : correo,
        "contraseña" : contraseña
    };
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'usuarios/registrar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle15').modal('hide');
            limpiar();    
            listarusuarios();
                
        },error: (response) => {
            console.log(response);
        }
    });
}

function eliminarusuarios(){
    var id = $("#idusuarios").val();

    var parametro = {"idusuarios" : id};
    $.ajax({
        data:  parametro, //datos que se envian a traves de ajax
        url:   'usuarios/eliminar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle16').modal('hide');    
            listarusuarios();
                
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