
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
    
    $.ajax({
        data:  {'nombre':nombre}, //datos que se envian a traves de ajax
        url:   'categorias/registrar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle3').modal('hide');
            limpiar(); 
            listarCategoriasProd();
        },error: (response) => {
            console.log(response);

        }
    });
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
    $.ajax({
        data:  parametros, //datos que se envian a traves de ajax
        url:   'categorias/guardar', //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) {
            $('#exampleModalToggle6').modal('hide');    
            limpiar();
            listarCatProd();
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function eliminarProd(id,id_cat){
   
    $.ajax({
        url:   'categorias/eliminarProd/'+id, //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { 
            listarProdCat(id_cat);
        },
        error: (response) => {
            console.log(response);
        }
    });
}

function eliminarCat(){
    var id = $('#idcatE').val();
    $.ajax({
        url:   'categorias/eliminarCat/'+id, //archivo que recibe la peticion
        type:  'POST', //método de envio
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle6').modal('hide');    
            listarCatProd();
        },
        error: (response) => {
            console.log(response);
        }
    });
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


    

