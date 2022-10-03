
$("#volver27").on("click", function() {
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
}

function listarusuarios(){
    
    $.get("usuarios/listar", {}, function (data, status) {
        $("#list_usuarios").html(data);
        $('#exampleModalToggle26').modal('show');
    });
}

function listarRol(direccion){

    $.ajax({
        type: "POST",
        url: "usuarios/listarRoles",
        dataType: "html",
        success: function (response) {
            $(direccion).html(response);
        },
        error: (response) => {
            console.log(response);
        }
    });

}

function editarUsuarios(id){
    listarRol('#rol_usuario');
    consultarusuarios(id);
    $('#exampleModalToggle16').modal('show');
}

function consultarusuarios (id) {
    $.ajax({
        type: "POST",
        url: "usuarios/consultar/"+id,
        dataType: "json",
        success: function (response) {
            response.map( function (elem) {
                $("#id").val(elem.id);
                $("#nombre1").val(elem.nombre);
                $("#correo").val(elem.correo);
                $("#rol_usuario option[value='"+ elem.rol_usuario +"']").attr("selected",true);
            }); 
        },
        error: (response) => {
            console.log(response);
        }
    });
    
}

function guardarUsuarios(){
    var id = $("#id").val();
    var nombre = $("#nombre1").val();
    var correo = $("#correo").val();
    var contraseña = $("#contraseña").val();
    var rol=$("#rol_usuario").val();

    var parametros = {
        "nombre1" : nombre,
        "correo" : correo,
        "contraseña" : contraseña,
        "id" : id,
        "rol": rol
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

function crearUsuario(){
    listarRol('#rol_usuarioR');
    $('#exampleModalToggle27').modal('show');
}

function registrarUsuarios(){
    var nombre = $("#nombre3").val();
    var correo = $("#correo2").val();
    var contraseña = $("#contraseña1").val();
    var rol = $("#rol_usuario").val();
   
    var parametros = {
        "nombre" : nombre,
        "correo" : correo,
        "contraseña" : contraseña,
        "rol" : rol
    };
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'usuarios/registrar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle27').modal('hide');
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

$("#buscadorU").on("keyup",function(e) {
    e.preventDefault();
    var busqueda = $("#buscadorU").val();
    if (busqueda !== "") {
        var parametro = {"busqueda" : busqueda};
        $.ajax({
            data:  parametro, //datos que se envian a traves de ajax
            url:   'usuarios/buscar', //archivo que recibe la peticion
            type:  'POST', //método de envio
            success:  function (response) {
                $("#list_usuarios").html(response);
                $('#exampleModalToggle26').modal('show');
            },
            error: (response) => {
                console.log(response);
            }
        });  
    }else{
        listarusuarios();
    }

    
})