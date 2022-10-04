var toastMixin = Swal.mixin({
    toast: true,
    icon: 'success',
    title: 'General Title',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

function validacion(tipo,titulo,texto){
    Swal.fire({
        icon: tipo,
        title: titulo,
        text: texto,
      })
}


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
}

function listarCatProd(){
    
    $.get("categorias/listar", {}, function (data, status) {
        $("#list_cat").html(data);
        $('#exampleModalToggle5').modal('show');
    });
}

function registrarCategorias(){
    var nombre = $("#nombreC").val();
    
    if (nombre != "") {
        $.ajax({
            data:  {'nombre':nombre}, //datos que se envian a traves de ajax
            url:   'categorias/registrar', //archivo que recibe la peticion
            type:  'POST', //método de envio
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve 
                
                $('#exampleModalToggle3').modal('hide');
                toastMixin.fire({
                    animation: true,
                    title: 'Categoría Registrada'
                });
                limpiar(); 
                listarCategoriasProd();
            },error: (response) => {
                console.log(response);

            }
        });
    }else{
        validacion("error","Error","Debes ingresar el nombre","");
    }
    
}

function editarCat (id) {
    $.ajax({
        type: "POST",
        url: "categorias/consultar/"+id,
        dataType: "json",
        success: function (response) {
            $("#idcatE").val(response[0].id);
            $("#nombrecatE").val(response[0].nombre);
            listarProdCat(id);
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
            console.log("response");
        }
    });
}

function guardarCat(){
    var id = $("#idcatE").val();
    var nombre = $("#nombrecatE").val();
    
    var parametros = {
        "nombre" : nombre,
        "id" : id
    };
    if (nombre != "") {
        $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'categorias/guardar', //archivo que recibe la peticion
            type:  'POST', //método de envio
            success:  function (response) {
                $('#exampleModalToggle6').modal('hide'); 
                toastMixin.fire({
                    animation: true,
                    title: 'Categoría Modificada'
                });  
                limpiar();
                listarCatProd();
            },
            error: (response) => {
                console.log(response);
            }
        });
    }else{
        validacion("error","Error","Debes ingresar el nombre");
    }
}

function eliminarProd(id,id_cat){
    Swal.fire({
        title: '¿Estas seguro que deseas Eliminar el registro?',
        ico: "warning",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        denyButtonText: `No Eliminar`,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:   'categorias/eliminarProd/'+id, //archivo que recibe la peticion
                type:  'POST', //método de envio
                success:  function (response) { 
                    toastMixin.fire({
                        animation: true,
                        title: 'Producto Eliminado'
                    });
                    listarProdCat(id_cat);

                },
                error: (response) => {
                    console.log(response);
                }
            })
        } else if (result.isDenied) {
            Swal.fire('Los cambios no fueron guardados', '', 'info')
          }
    })
}

function eliminarCat(){
    Swal.fire({
        title: '¿Estas seguro que deseas Eliminar el registro?',
        ico: "warning",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        denyButtonText: `No Eliminar`,
    }).then((result) => {
        if (result.isConfirmed) {
            var id = $('#idcatE').val();
            $.ajax({
                url:   'categorias/eliminarCat/'+id, //archivo que recibe la peticion
                type:  'POST', //método de envio
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $('#exampleModalToggle6').modal('hide');   
                    toastMixin.fire({
                        animation: true,
                        title: 'Categoría Eliminada'
                    });
                    listarCatProd();
                },
                error: (response) => {
                    console.log(response);
                }
            })
        } else if (result.isDenied) {
            Swal.fire('Los cambios no fueron guardados', '', 'info')
          }
    })
}

$("#searchCat").on("keyup",function(e) {
    e.preventDefault();
    var busqueda = $("#searchCat").val();
    if (busqueda !== "") {
        var parametro = {"busqueda" : busqueda};
        $.ajax({
            data:  parametro, //datos que se envian a traves de ajax
            url:   'categorias/buscarCat', //archivo que recibe la peticion
            type:  'POST', //método de envio
            success:  function (response) {
                $("#list_cat").html(response);
                $('#exampleModalToggle5').modal('show');
            },
            error: (response) => {
                console.log(response);
            }
        });  
    }else{
        listarCatProd();
    }
})


    

