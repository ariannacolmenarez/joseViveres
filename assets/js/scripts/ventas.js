$(document).ready(function () {
    listar(); 
});

// function limpiar(){
//     $('input').val("");
//     $('select').val("");
//     $('textarea').val("");
// };




function listar(){
    
    $.ajax({
        type: "POST",
        url: "ventas/listar",
        dataType: "json",
        success: function (response) {
            $("#lista_prod").html(response);
        },
        error: (response) => {
            console.log(response);
        }
    });
};

var canasta=[];

 function agg (id) {
    var parametro = {"id" : id};
    
    $.ajax({
        data:  parametro,
        type: "POST",
        url: "ventas/agg",
        dataType: "json",
        success: function (response) {
            let indice = -1;
            for (let i = 0; i < canasta.length; i++) {  
              if (canasta[i][0].id == id) {
                indice = i;
                break;
              }
            }
            if (indice >= 0){
                canasta[indice][0].agregado++;
            }else{
               canasta.push(response); 
               
            }
            productos = document.getElementById("canasta");
            while (productos.firstChild) {
                productos.removeChild(productos.firstChild);
            }console.log(canasta);
            canasta.map(function(producto) {
                if(producto[0].agregado == undefined){producto[0].agregado=1};
                html= `<div class="row pt-1 align-items-center border-secondary border-bottom" id="listaCanasta">
                <div class="col-1 m-0 p-0">
                    <button class="btn btn-icon text-danger">
                        <i class="ti-trash"></i>
                    </button>
                </div>
                <div class="col-10 col-lg-7 col-md-10 text-center ">
                    <h6 class="card-title text-success">`+producto[0].nombre+`</h6>
                    <h6 class="text-muted"><small>`+producto[0].cantidad-producto[0].agregado+`disponible</small></h6>
                    <p class="card-text">`+producto[0].precio_venta+` BS</p>
                </div>
                <div class="col-4 text-center">
                    <div class="btn-group" role="group" aria-label="Basic Example">
                        <button class="btn btn-outline-secondary btn-rounded btn-xs ">
                        <i class="fa-solid fa-circle-minus"></i>
                        </button>
                        <div class="btn btn-secondary btn-rounded btn-xs">
                           <b>`+producto[0].agregado+`</b> 
                        </div>
                        <button class="btn btn-outline-secondary btn-rounded btn-xs">
                        <i class="fa-solid fa-circle-plus"></i>
                        </button>
                    </div>
                    
                    <h6 class="mt-2 text-muted">=BS</h6>
                </div>
            </div>`;
                
                $("#canasta").append(html);
            });
        },
        error: (response) => {
            console.log("response");
        }
    });
    
 }

 function listarCanasta(productos){
    
 }

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
    

