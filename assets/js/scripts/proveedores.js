$("#volver10").on("click", function() {
    $('#exampleModalToggle11').modal('hide');
});

$("#proveedores").on("click", function(e) {
    e.preventDefault();

    listar();

})


function listar(){
    
    $.get("proveedores/listar", {}, function (data, status) {
        $("#proveedor").html(data);
        $('#exampleModalToggle10').modal('show');
    });
};


function consultar (id) {
    $.ajax({
        type: "POST",
        url: "proveedores/consultar/"+id,
        dataType: "json",
        success: function (response) {
            console.log(response);
            response.map( function (elem) {
                $("#id").val(elem.id);
                $("#nombre").val(elem.nombre);
                $("#telefono").val(elem.telefono);
                $("#nro_doc").val(elem.nro_doc);
                $("#tipo_doc option[value='"+ elem.tipo_doc +"']").attr("selected",true);
                $("#comentario").text(elem.comentario);
            });
            $('#exampleModalToggle11').modal('show');
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

    console.log(comentario);
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
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            $('#exampleModalToggle11').modal('hide');    
            listar();
                
        }
});
}
