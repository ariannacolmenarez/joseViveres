
$("#close").on("click", function() {
    limpiar();
});

$("#categorias").on("click", function() {
    $('#exampleModalToggle3').modal('show');
});

$("#editarCat").on("click", function() {
    listarCatProd();
    
});

function limpiar(){
    $('input').val("");
    $('select').val("");
    $('textarea').val("");
};

function listarCatProd(){
    
    $.get("categorias/listar", {}, function (data, status) {
        $("#list_cat").html(data);
        $('#exampleModalToggle5').modal('show');
    });
};




// function listarproveedores(){
    
//     $.get("proveedores/listar", {}, function (data, status) {
//         $("#proveedor").html(data);
//         $('#exampleModalToggle3').modal('show');
//     });
// };


function editarCat (id) {
    $.ajax({
        type: "POST",
        url: "categorias/consultar/"+id,
        dataType: "json",
        success: function (response) {
            $("#idcatE").val(response[0].id);
            $("#nombrecatE").val(response[0].nombre);
            listarProdCat(response[0].id);
            $('#exampleModalToggle6').modal('show');
        },
        error: (response) => {
            console.log(response);
        }
    });
    
}

function listarProdCat(id){
    $.ajax({
        type: "POST",
        url: "categorias/listarProdCat/"+id,
        dataType: "json",
        success: function (response) {
            console.log(response)
            $("#list_prod").html(response);
            
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function guardarProveedor(){
    var id = $("#id").val();
    var nombre = $("#nombre").val();
    var telefono = $("#telefono").val();
    var nro_doc = $("#nro_doc").val();
    var tipo_doc= $("#tipo_doc").val();
    var comentario = $("#comentario").val();

    var parametros = {
        "nombre" : nombre,
        "telefono" : telefono,
        "nro_doc" : nro_doc,
        "tipo_doc" : tipo_doc,
        "comentario" : comentario,
        "id" : id
    };
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'proveedores/guardar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) {
            $('#exampleModalToggle11').modal('hide');    
            listarproveedores();
                
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function registrarCategorias(){
    var nombre = $("#nombreC").val();
    
    $.ajax({
        data:  {'nombre':nombre}, //datos que se envian a traves de ajax
        url:   'categorias/registrar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle3').modal('hide');
            limpiar(); 
            document.location.reload();
        },error: (response) => {
            console.log(response);

        }
    });
}

function eliminarProveedor(){
    var id = $("#id").val();

    var parametro = {"id" : id};
    $.ajax({
        data:  parametro, //datos que se envian a traves de ajax
        url:   'proveedores/eliminar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle11').modal('hide');    
            listarproveedores();
                
        },
        error: (response) => {
            console.log(response);
        }
    });
}

$("#buscador").on("keyup",function(e) {
    e.preventDefault();
    var busqueda = $("#buscador").val();
    if (busqueda !== "") {
        var parametro = {"busqueda" : busqueda};
        $.ajax({
            data:  parametro, //datos que se envian a traves de ajax
            url:   'proveedores/buscar', //archivo que recibe la peticion
            type:  'POST', //método de envio
            success:  function (response) {
                $("#proveedor").html(response);
                $('#exampleModalToggle10').modal('show');

            },
            error: (response) => {
                console.log(response);
            }
        });  
    }else{
        listarproveedores();
    }

    
})
    

