listar(); 
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
var sum=0;

function agg (id,operacion) {
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
                if (operacion == 1) {
                    if(canasta[indice][0].agregado < canasta[indice][0].cantidad){
                        canasta[indice][0].agregado++; 
                    }
                }else{
                    if(canasta[indice][0].agregado > 1 ){
                        canasta[indice][0].agregado--; 
                    }
                }
                
                
            }else{
               canasta.push(response); 
               
            }

            productos = document.getElementById("canasta");

            while (productos.firstChild) {
                productos.removeChild(productos.firstChild);
            }

            canasta.map(function(producto) {

                if(producto[0].agregado == undefined){producto[0].agregado=1};

                var disponible = producto[0].cantidad-producto[0].agregado;
                var total= producto[0].precio_venta * producto[0].agregado;

                html= `<div class="row pt-1 align-items-center border-secondary border-bottom" id="listaCanasta">
                            <div class="col-1 m-0 p-0">
                                <button class="btn btn-icon text-danger">
                                    <i class="ti-trash"></i>
                                </button>
                            </div>
                            <div class="col-10 col-lg-7 col-md-10 text-center ">
                                <h6 class="card-title text-success">`+producto[0].nombre+`</h6>
                                <h6 class="text-muted"><small>`+disponible+`disponible</small></h6>
                                <p class="card-text">`+producto[0].precio_venta+` BS</p>
                            </div>
                            <div class="col-lg-4 col-12 text-center">
                                <h6 class="mt-2 text-muted">= `+total+` BS</h6>
                            </div>
                            <div class="col-12 mb-1">
                                <div class="btn-group" role="group" aria-label="Basic Example">
                                    <button class="btn btn-outline-secondary btn-rounded btn-xs " onclick="agg(`+producto[0].id+`,0)">
                                    <i class="fa-solid fa-circle-minus"></i>
                                    </button>
                                    <div class="btn btn-secondary btn-rounded btn-xs ">
                                    <b><input type="text" class="border-0 bg-transparent text-center" id="cant`+producto[0].id+`" value="`+producto[0].agregado+`"></b> 
                                    </div>
                                    <button class="btn btn-outline-secondary btn-rounded btn-xs" onclick="agg(`+producto[0].id+`,1)">
                                    <i class="fa-solid fa-circle-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>`;
                
                $("#canasta").append(html);
                var nombre = "#cant"+producto[0].id;
                $(nombre).on("change",function(){

                    if($("#cant").val() != ""){

                        var cant = parseFloat($(nombre).val());

                        if (cant < producto[0].cantidad && cant > 0) {

                            producto[0].agregado = cant+1;
                            agg(producto[0].id);

                        }
                    }else{

                        producto[0].agregado = 1;
                        agg(producto[0].id);

                    }

                });

            });

            canasta.forEach(item => {

                const precio_venta = item[0].precio_venta;
                sum = sum + precio_venta*item[0].agregado;
                
            });

            $("#monto").html(sum+" BS");
        },
        error: (response) => {
            console.log("response");
        }
        
    });
    
}

$("#vaciarCanasta").on("click",function(){
    console.log("vacia");
    canasta = [];
    sum = 0;
    $("#monto").html("");
    $("#canasta").html("");
});

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

function registrarVenta(){
    var nombre = $("#nombreR").val();
    var telefono = $("#telefonoR").val();
    var nro_doc = $("#nro_docR").val();
    var tipo_doc= $("#tipo_docR").val();
    var comentario = $("#comentarioR").val();

    
    var parametros = {
        "nombre" : nombre,
        "telefono" : telefono,
        "nro_doc" : nro_doc,
        "tipo_doc" : tipo_doc,
        "comentario" : comentario,
    };
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'proveedores/registrar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle12').modal('hide');
            limpiar();    
            listar();
                
        },error: (response) => {
            console.log(response);
        }
    });
}

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
    

