$(document).ready(function() {
    listarRoles();
});

function limpiar(){
    $('input').val("");
    $('select').val("");
    $('textarea').val("");
};

function listarRoles(){
    
    $.get("seguridad/listarRoles", {}, function (data, status) {
        $("#list_roles").html(data);
        $('#list_roles').DataTable({
            "language": {
              "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
          });
    });
};
function aggRol(){
    $('#exampleModalToggle19').modal('show');
}

function registrarRol(){
    var nombre = $("#nombreR").val();
    var descripcion = $("#descripcionR").val();

    var parametros = {
        "nombre" : nombre,
        "desc" : descripcion
    };
    console.log(parametros)
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'seguridad/registrarRol', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle19').modal('hide');
            limpiar();    
            listarRoles();
                
        },error: (response) => {
            console.log(response);
        }
    });
}

function consultarRoles(id) {
    $.ajax({
        type: "POST",
        url: "seguridad/consultarRoles/"+id,
        dataType: "json",
        success: function (response) {
            console.log(response)
            $("#idRol").val(id);
            $("#nombreRol").val(response[0].nombre);
            $("#descripcionRol").val(response[0].descripcion);
            $('#exampleModalToggle20').modal('show');
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function guardarRol(){
    var id = $("#idRol").val();
    var nombre = $("#nombreRol").val();
    var descripcion = $("#descripcionRol").val();
   
    var parametros = {
        "nombre" : nombre,
        "descripcion" : descripcion,
        "id" : id
    };
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'seguridad/guardarRol', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) {
            $('#exampleModalToggle20').modal('hide');    
            listarRoles();
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function eliminarRol(id){

    $.ajax({
        url:   'seguridad/eliminarRol/'+id, //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle20').modal('hide');    
            listarRoles();
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function permisos(id){
    window.location.assign("seguridad/permisos?c="+id);
}