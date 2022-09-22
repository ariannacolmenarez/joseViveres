$("#volver11").on("click", function() {
    $('#exampleModalToggle11').modal('hide');
});

$("#volver12").on("click", function() {
    limpiar();
});

$("#close").on("click", function() {
    limpiar();
});

$("#gastos").on("click", function(e) {
    listarCategorias();
});

function limpiar(){
    $('input').val("");
    $('select').val("");
    $('textarea').val("");
};




function listarCategorias(){

    $.ajax({
        type: "POST",
        url: "gastos/consultarCategorias",
        success: function (data) {
            $("#categorias").html(data);
            $('#exampleModalToggle2').modal('show');
        },
        error: (response) => {
            console.log(response);
        }
    });

};


// function consultar (id) {
//     $.ajax({
//         type: "POST",
//         url: "proveedores/consultar/"+id,
//         dataType: "json",
//         success: function (response) {
//             response.map( function (elem) {
//                 $("#id").val(elem.id);
//                 $("#nombre").val(elem.nombre);
//                 $("#telefono").val(elem.telefono);
//                 $("#nro_doc").val(elem.nro_doc);
//                 $("#tipo_doc option[value='"+ elem.tipo_doc +"']").attr("selected",true);
//                 $("#comentario").val(elem.comentario);
//             });
//             $('#exampleModalToggle11').modal('show');
//         },
//         error: (response) => {
//             console.log(response);
//         }
//     });
    
// }

// function guardarProveedor(){
//     var id = $("#id").val();
//     var nombre = $("#nombre").val();
//     var telefono = $("#telefono").val();
//     var nro_doc = $("#nro_doc").val();
//     var tipo_doc= $("#tipo_doc").val();
//     var comentario = $("#comentario").val();

//     var parametros = {
//         "nombre" : nombre,
//         "telefono" : telefono,
//         "nro_doc" : nro_doc,
//         "tipo_doc" : tipo_doc,
//         "comentario" : comentario,
//         "id" : id
//     };
//     $.ajax({
//         data:  parametros, //datos que se envian a traves de ajax
//         url:   'proveedores/guardar', //archivo que recibe la peticion
//         type:  'POST', //método de envio
//         success:  function (response) {
//             $('#exampleModalToggle11').modal('hide');    
//             listar();
                
//         },
//         error: (response) => {
//             console.log(response);
//         }
//     });
// }

// function registrarProveedor(){
//     var nombre = $("#nombreR").val();
//     var telefono = $("#telefonoR").val();
//     var nro_doc = $("#nro_docR").val();
//     var tipo_doc= $("#tipo_docR").val();
//     var comentario = $("#comentarioR").val();

    
//     var parametros = {
//         "nombre" : nombre,
//         "telefono" : telefono,
//         "nro_doc" : nro_doc,
//         "tipo_doc" : tipo_doc,
//         "comentario" : comentario,
//     };
//     $.ajax({
//         data:  parametros, //datos que se envian a traves de ajax
//         url:   'proveedores/registrar', //archivo que recibe la peticion
//         type:  'POST', //método de envio
//         success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
//             $('#exampleModalToggle12').modal('hide');
//             limpiar();    
//             listar();
                
//         },error: (response) => {
//             console.log(response);
//         }
//     });
// }

// function eliminarProveedor(){
//     var id = $("#id").val();

//     var parametro = {"id" : id};
//     $.ajax({
//         data:  parametro, //datos que se envian a traves de ajax
//         url:   'proveedores/eliminar', //archivo que recibe la peticion
//         type:  'POST', //método de envio
//         success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
//             $('#exampleModalToggle11').modal('hide');    
//             listar();
                
//         },
//         error: (response) => {
//             console.log(response);
//         }
//     });
// }

// $("#buscador").on("keyup",function(e) {
//     e.preventDefault();
//     var busqueda = $("#buscador").val();
//     if (busqueda !== "") {
//         var parametro = {"busqueda" : busqueda};
//         $.ajax({
//             data:  parametro, //datos que se envian a traves de ajax
//             url:   'proveedores/buscar', //archivo que recibe la peticion
//             type:  'POST', //método de envio
//             success:  function (response) {
//                 $("#proveedor").html(response);
//                 $('#exampleModalToggle10').modal('show');

//             },
//             error: (response) => {
//                 console.log(response);
//             }
//         });  
//     }else{
//         listar();
//     }

    
// })
    

